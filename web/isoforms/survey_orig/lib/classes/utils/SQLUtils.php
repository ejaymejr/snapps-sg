<?php
// $Source$
// $Id$


class SQLUtils 
{
    

    function FormatValue($text) {
        
        $subst = array("'" => '\\\'',
                        '"' => '\"',
                        '\\' => '\\\\'
        );
        return strtr($text, $subst);
    }
}

?>