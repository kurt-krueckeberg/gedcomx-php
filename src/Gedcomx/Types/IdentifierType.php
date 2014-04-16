<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Types {

    // Enumeration of standard identifier types.
    class IdentifierType {
    

      //  The primary identifier for the resource.
      const Primary = "{http://gedcomx.org/}Primary";

      //  An identifier for the evidence that supports the resource. For example, when a conclusion
      //  about a person is extracted, analyzed and evaluated atomically within the context of a
      //  single source, it takes the form of a (extracted) person conclusion, and the extracted conclusion
      //  may supply an identifier for the person. As all evidence for the person is gathered, the
      //  (working) person conclusion identifies the evidence used to support the conclusion by including
      //  each evidence identifier in the list of identifiers for the person.
      const Evidence = "{http://gedcomx.org/}Evidence";

      //  An identifier that has been relegated, deprecated, or otherwise downgraded. This
      //  identifier is commonly used as the result of a merge when what was once a primary
      //  identifier for a person is no longer primary.
      const Deprecated = "{http://gedcomx.org/}Deprecated";

      //  An identifier that is considered to be a long-term persistent identifier. Applications
      //  that provide persistent identifiers are claiming that links to the resource using the identifier
      //  won't break.
      const Persistent = "{http://gedcomx.org/}Persistent";
    
    }

  }  
    
?>
