<?php

namespace Gedcomx\Tests\Extensions\FamilySearch\Rs\Client;

use Gedcomx\Extensions\FamilySearch\Platform\Discussions\Discussion;
use Gedcomx\Extensions\FamilySearch\Rs\Client\DiscussionState;
use Gedcomx\Extensions\FamilySearch\Rs\Client\FamilySearchStateFactory;
use Gedcomx\Rs\Client\Util\HttpStatus;
use Gedcomx\Tests\ApiTestCase;
use Gedcomx\Tests\DiscussionBuilder;

class DiscussionStateTest extends ApiTestCase{

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Create_Discussion_usecase
     */
    public function testCreateDiscussion()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);


        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());

        $newState = $this->collectionState()->addDiscussion($discussion);
        $this->assertAttributeEquals(HttpStatus::CREATED, "statusCode", $newState->getResponse(), $this->buildFailMessage(__METHOD__, $newState));

        $newState->delete();
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Read_Discussion_usecase
     */
    public function testReadDiscussion()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());

        $newState = $this->collectionState()->addDiscussion($discussion);
        $newState = $newState->get();
        $this->assertAttributeEquals(HttpStatus::OK, "statusCode", $newState->getResponse(), $this->buildFailMessage(__METHOD__, $newState));

        $this->assertNotEmpty($newState->getDiscussion());

        $newState->delete();
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Update_Discussion_usecase
     */
    public function testUpdateDiscussion()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());

        $newState = $this->collectionState()->addDiscussion($discussion);
        $newState = $newState->get();
        /** @var Discussion $discussion */
        $discussion = $newState->getDiscussion();
        $discussion->setDetails($this->faker->paragraph());

        $updated = $newState->updateDiscussion($discussion);
        $this->assertAttributeEquals(HttpStatus::NO_CONTENT, "statusCode", $updated->getResponse(), $this->buildFailMessage(__METHOD__, $updated));

        $updated->delete();
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Delete_Discussion_usecase
     */
    public function testDeleteDiscussion()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());

        $newState = $this->collectionState()->addDiscussion($discussion);
        $newState = $newState->get();
        $this->assertAttributeEquals(HttpStatus::OK, "statusCode", $newState->getResponse(), $this->buildFailMessage(__METHOD__, $newState));

        $this->assertNotEmpty($newState->getDiscussion());

        $deleted = $newState->delete();
        $this->assertAttributeEquals(HttpStatus::NO_CONTENT, "statusCode", $deleted->getResponse(), $this->buildFailMessage(__METHOD__, $deleted));
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Create_Comment_usecase
     */
    public function testCreateComment()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());

        $state = $this->collectionState()->addDiscussion($discussion);
        $state = $state->get();

        $comment = DiscussionBuilder::createComment($userState);
        $state = $state->addComment($comment);
        $this->assertAttributeEquals(HttpStatus::CREATED, "statusCode", $state->getResponse(), $this->buildFailMessage(__METHOD__, $state));

        $state->delete();
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Read_Comments_usecase
     */
    public function testReadComments()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());
        $state = $this->collectionState()->addDiscussion($discussion);

        $state = $state->get();
        $comment = DiscussionBuilder::createComment($userState);
        $state->addComment($comment);
        $comment = DiscussionBuilder::createComment($userState);
        $state->addComment($comment);
        $state = $state->get();

        $state->loadComments();
        $comments = $state->getDiscussion()->getComments();
        $this->assertEquals(2, count($comments));

        $state->delete();
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Update_Comment_usecase
     */
    public function testUpdateComment()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());
        /** @var DiscussionState $state */
        $state = $this->collectionState()->addDiscussion($discussion);

        $state = $state->get();
        $comment = DiscussionBuilder::createComment($userState);
        $state->addComment($comment);
        $comment = DiscussionBuilder::createComment($userState);
        $state->addComment($comment);
        $state = $state->get();

        $state->loadComments();
        $comments = $state->getDiscussion()->getComments();
        $comment = $comments[0];
        $newText = $this->faker->paragraph();
        $comment->setText($newText);

        $updated = $state->updateComment($comment);
        $this->assertAttributeEquals(HttpStatus::NO_CONTENT, "statusCode", $updated->getResponse(), $this->buildFailMessage(__METHOD__, $updated));

        $state->loadComments();
        $this->assertEquals(2, count($comments));

        $pass = false;
        $comments = $state->getDiscussion()->getComments();
        foreach ($comments as $c) {
            if ($c->getId() == $comment->getId() & $c->getText() == $newText){
                $pass = true;
            }
        }
        $this->assertTrue($pass);

        $state->delete();
    }

    /**
     * @link https://familysearch.org/developers/docs/api/discussions/Delete_Comment_usecase
     */
    public function testDeleteComment()
    {
        $factory = new FamilySearchStateFactory();
        $this->collectionState($factory);

        $userState = $this->collectionState()->readCurrentUser();
        $discussion = DiscussionBuilder::createDiscussion($userState->getUser()->getTreeUserId());
        /** @var DiscussionState $state */
        $state = $this->collectionState()->addDiscussion($discussion);

        $state = $state->get();
        $comment = DiscussionBuilder::createComment($userState);
        $state->addComment($comment);
        $comment = DiscussionBuilder::createComment($userState);
        $state->addComment($comment);
        $state = $state->get();

        $state->loadComments();
        $comments = $state->getDiscussion()->getComments();
        $comment = $comments[0];

        $deleted = $state->deleteComment($comment);
        $this->assertAttributeEquals(HttpStatus::NO_CONTENT, "statusCode", $deleted->getResponse(), $this->buildFailMessage(__METHOD__, $deleted));

        $state = $state->get();
        $state->loadComments();
        $comments = $state->getDiscussion()->getComments();
        $this->assertEquals(1, count($comments));

        $state->delete();
    }
} 