<?php

namespace Gedcomx\Tests;

use Faker\Factory;
use Gedcomx\Conclusion\DateInfo;
use Gedcomx\Conclusion\DisplayProperties;
use Gedcomx\Conclusion\Fact;
use Gedcomx\Conclusion\Gender;
use Gedcomx\Conclusion\Name;
use Gedcomx\Conclusion\NameForm;
use Gedcomx\Conclusion\NamePart;
use Gedcomx\Conclusion\Person;
use Gedcomx\Conclusion\PlaceReference;
use Gedcomx\Types\FactType;
use Gedcomx\Types\GenderType;
use Gedcomx\Types\NamePartType;
use Gedcomx\Types\NameType;

class PersonBuilder
{

    private static $faker;

    private static function faker(){
        if( self::$faker == null ){
            self::$faker = Factory::create();
        }

        return self::$faker;
    }
    
    public static function buildPerson()
    {
        /*
         * Can't use faker for dates. It doesn't deal well with negative timestamps.
         */
        $gender = self::faker()->boolean() ? GenderType::FEMALE : GenderType::MALE;
        $rnd = rand(50,200);
        $birthDate = new \DateTime("-{$rnd} years");
        $birthPlace = self::faker()->city() . ", " . self::faker()->state() . ", United States";
        $rnd = rand(5,95);
        $deathDate = new \DateTime($birthDate->format("F d, Y") . "+{$rnd}years");
        $living = false;
        if ($deathDate->getTimestamp() > time()) {
            $living = true;
        }

        $person = new Person();
        $person->setGender(new Gender(array("type" => $gender)));
        $person->setLiving($living);
        $person->setPrincipal(false);

        $name = self::birthName($gender);
        $person->setNames(array($name));

        $facts = array();
        $birth = new Fact(
            array(
                "type"  => FactType::BIRTH,
                "date"  => new DateInfo(array(
                        "original" => $birthDate->format("F d, Y")
                    )),
                "place" => new PlaceReference(array(
                        "description" => "possibly, maybe, don't know",
                        "original"    => $birthPlace
                    ))
            ));
        $facts[] = $birth;

        if (!$living) {
            $death = new Fact(
                array(
                    "type"  => FactType::DEATH,
                    "date"  => new DateInfo(array(
                            "original" => $deathDate->format("F d, Y")
                        )),
                    "place" => new PlaceReference(array(
                            "description" => "possibly, maybe, don't know",
                            "original"    => self::faker()->city() . ", " . self::faker()->state() . ", United States"
                        ))
                ));
            $facts[] = $death;
        }

        $person->setFacts($facts);

        $display = new DisplayProperties(array(
            "birthDate"  => $birthDate->format("d M Y"),
            "birthPlace" => $birthPlace,
            "gender"     => $gender,
            "lifespan"   => $birthDate->format("d M Y") . " - " . ($living ? '' : $deathDate->format("d M Y")),
            "name"       => $name->toString()
        ));
        $person->setDisplayExtension($display);

        return $person;
    }

    public static function birthName($gender)
    {
        $firstName = self::faker()->firstName($gender);
        $lastName = self::faker()->lastName();
        return new Name(array(
            "type"      => NameType::BIRTHNAME,
            "preferred" => true,
            "nameForms" => array(
                new NameForm(array(
                    "lang"     => 'en',
                    "fullText" => $firstName . ' ' . $lastName,
                    "parts"    => array(
                        new NamePart(array(
                            "type"  => NamePartType::GIVEN,
                            "value" => $firstName
                        )),
                        new NamePart(array(
                            "type"  => NamePartType::SURNAME,
                            "value" => $lastName
                        ))
                    )
                ))
            )
        ));

    }

    public static function nickName($gender = 'female' )
    {
        $name = self::faker()->firstName($gender);
        return new Name(array(
            "type"      => NameType::ALSOKNOWNAS,
            "nameForms" => array(
                new NameForm(array(
                    "lang"     => 'en',
                    "fullText" => $name,
                    "parts"    => array(
                        new NamePart(array(
                            "type"  => NamePartType::GIVEN,
                            "value" => $name
                        ))
                    )
                ))
            )
        ));
    }

    public static function militaryService()
    {
        $rnd = rand(50,125);

        $date = new \DateTime("-{$rnd} years");
        return new Fact(array(
            'primary' => true,
            'type' => FactType::MILITARYSERVICE,
            'date' => new DateInfo(array(
                    "original" => $date->format("F d, Y")
                )),
            'value' => self::faker()->sentence(6)
        ));
    }

    public static function eagleScout()
    {
        $rnd = rand(50,125);

        $date = new \DateTime("-{$rnd} years");
        return new Fact(array(
            'primary' => true,
            'type' => "data:,Eagle%20Scout",
            'date' => new DateInfo(array(
                "original" => $date->format("F d, Y")
            )),
            'value' => self::faker()->sentence(6)
        ));
    }

}