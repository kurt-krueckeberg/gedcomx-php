<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Source {

    /**
     * Represents a source citation.
     */
    class SourceCitation extends \Gedcomx\Links\HypermediaEnabledData  {
    
      /**
       * The language of the note.
       */
      private $lang;
    
      /**
       * A reference to the citation template for this citation.
       */
      private $citationTemplate;
      /**
       * The list of citation fields.
       */
      private $fields;
      /**
       * A rendering (as a string) of a source citation.  This rendering should be the most complete rendering available.
       */
      private $value;

      /**
       * Constructs a SourceCitation from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * The language of the note.
       */
      public function getLang() {
        return $this->lang;
      }
      
      /**
       * The language of the note.
       */
      public function setLang($lang) {
        $this->lang = $lang;
      }
      /**
       * A reference to the citation template for this citation.
       */
      public function getCitationTemplate() {
        return $this->citationTemplate;
      }
      
      /**
       * A reference to the citation template for this citation.
       */
      public function setCitationTemplate($citationTemplate) {
        $this->citationTemplate = $citationTemplate;
      }
      /**
       * The list of citation fields.
       */
      public function getFields() {
        return $this->fields;
      }
      
      /**
       * The list of citation fields.
       */
      public function setFields($fields) {
        $this->fields = $fields;
      }
      /**
       * A rendering (as a string) of a source citation.  This rendering should be the most complete rendering available.
       */
      public function getValue() {
        return $this->value;
      }
      
      /**
       * A rendering (as a string) of a source citation.  This rendering should be the most complete rendering available.
       */
      public function setValue($value) {
        $this->value = $value;
      }
      /**
       * Returns the associative array for this SourceCitation
       */
      public function toArray() {
        $a = parent::toArray();
        if( $this->lang ) {
          $a["lang"] = $this->lang;
        }
        if( $this->citationTemplate ) {
          $a["citationTemplate"] = $this->citationTemplate->toArray();
        }
        if( $this->fields ) {
          $ab = array();
          foreach( $this->fields as $i => $x ) {
            $ab[$i] = $x->toArray();
          }
          $a['fields'] = $ab;
        }
        if( $this->value ) {
          $a["value"] = $this->value;
        }
        return $a;
      }
      

      /**
       * Initializes this SourceCitation from an associative array
       */
      public function initFromArray($o) {
        parent::initFromArray($o);
        if( isset($o['lang']) ) {
          $this->lang = $o["lang"];
        }
        if( isset($o['citationTemplate']) ) {
          $this->citationTemplate = new \Gedcomx\Common\ResourceReference($o["citationTemplate"]);
        }
        $this->fields = array();
        if( isset($o['fields']) ) {
          foreach( $o['fields'] as $i => $x ) {
            $this->fields[$i] = new \Gedcomx\Source\CitationField($x);
          }
        }
        if( isset($o['value']) ) {
          $this->value = $o["value"];
        }
      }
    
    }
    
  }

?>
