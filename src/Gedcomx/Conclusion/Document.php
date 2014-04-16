<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Conclusion {

    /**
     * An abstract document that contains derived (conclusionary) text -- for example, a transcription or researcher analysis.
     */
    class Document extends \Gedcomx\Conclusion\Conclusion  {
    
      /**
       * The text type of the document.
       */
      private $textType;
      /**
       * Whether this document has been identified as &quot;extracted&quot;.
       */
      private $extracted;
      /**
       * The type of the document.
       */
      private $type;
    
      /**
       * The document text.
       */
      private $text;

      /**
       * Constructs a Document from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * The text type of the document.
       */
      public function getTextType() {
        return $this->textType;
      }
      
      /**
       * The text type of the document.
       */
      public function setTextType($textType) {
        $this->textType = $textType;
      }
      /**
       * Whether this document has been identified as &quot;extracted&quot;.
       */
      public function getExtracted() {
        return $this->extracted;
      }
      
      /**
       * Whether this document has been identified as &quot;extracted&quot;.
       */
      public function setExtracted($extracted) {
        $this->extracted = $extracted;
      }
      /**
       * The type of the document.
       */
      public function getType() {
        return $this->type;
      }
      
      /**
       * The type of the document.
       */
      public function setType($type) {
        $this->type = $type;
      }
      /**
       * The document text.
       */
      public function getText() {
        return $this->text;
      }
      
      /**
       * The document text.
       */
      public function setText($text) {
        $this->text = $text;
      }
      /**
       * Returns the associative array for this Document
       */
      public function toArray() {
        $a = parent::toArray();
        if( $this->textType ) {
          $a["textType"] = $this->textType;
        }
        if( $this->extracted ) {
          $a["extracted"] = $this->extracted;
        }
        if( $this->type ) {
          $a["type"] = $this->type;
        }
        if( $this->text ) {
          $a["text"] = $this->text;
        }
        return $a;
      }
      

      /**
       * Initializes this Document from an associative array
       */
      public function initFromArray($o) {
        parent::initFromArray($o);
        if( isset($o['textType']) ) {
          $this->textType = $o["textType"];
        }
        if( isset($o['extracted']) ) {
          $this->extracted = $o["extracted"];
        }
        if( isset($o['type']) ) {
          $this->type = $o["type"];
        }
        if( isset($o['text']) ) {
          $this->text = $o["text"];
        }
      }
    
    }
    
  }

?>
