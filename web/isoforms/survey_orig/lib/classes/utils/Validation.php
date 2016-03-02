<?php
// $Source$
// $Id$

class Validation
{

    function IsValidEmailFormat($email) {

        if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
            return false;
        } else return true;
    }

    function IsValidUserName($username) {
        
        if(strlen($username) < 6) {
            return false;
        }

        if(preg_match("/([^_a-z0-9])/i", $username) || !preg_match("/([a-z0-9])/i", $username) ) {
            return false;
        } else return true;
    }
    
    function RemovePlus($text)
    {
        return str_replace('+', '', $text);
    }
    
    function IsValidContactNumber($text)
    {
        // return ctype_digit($text);
		return true;
    }
}

?>
