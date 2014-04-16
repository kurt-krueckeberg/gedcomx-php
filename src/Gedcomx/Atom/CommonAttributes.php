<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Atom {

    /**
     * 
     */
    class CommonAttributes  {
    
      /**
       * The base.
       */
      private $base;
      /**
       * The language.
       */
      private $lang;
    

      /**
       * Constructs a CommonAttributes from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * The base.
       */
      public function getBase() {
        return $this->base;
      }
      
      /**
       * The base.
       */
      public function setBase($base) {
        $this->base = $base;
      }
      /**
       * The language.
       */
      public function getLang() {
        return $this->lang;
      }
      
      /**
       * The language.
       */
      public function setLang($lang) {
        $this->lang = $lang;
      }
      /**
       * Returns the associative array for this CommonAttributes
       */
      public function toArray() {
        $a = array();
        if( $this->base ) {
          $a["base"] = $this->base;
        }
        if( $this->lang ) {
          $a["lang"] = $this->lang;
        }
        return $a;
      }
      
      /**
       * Returns the JSON string for this CommonAttributes
       */
      public function toJson() {
        return json_encode($this->toArray());
      }

      /**
       * Initializes this CommonAttributes from an associative array
       */
      public function initFromArray($o) {
        if( isset($o['base']) ) {
          $this->base = $o["base"];
        }
        if( isset($o['lang']) ) {
          $this->lang = $o["lang"];
        }
      }
    
    }
    
  }

?>
