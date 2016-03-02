<?php
// $Source$
// $Id$

class UserAccount
{
    var $ID = false;
    var $info = array();

    function UserAccount($userID)
    {
        $this->ID = $userID;
        $query = @mysql_query("SELECT *, a.user_id AS user_id 
                                FROM " . TABLE_USERS . " a 
                                WHERE a.user_id = '$userID';");
        if(!$query) {
            echo mysql_error();
            $this->ID = false;
        } else if(mysql_num_rows($query) < 1) {
            $this->ID = false;
        } else {
            while($row = @mysql_fetch_assoc($query)) {
                $this->info = $row;
            }
        }
    }

    function GetID($username)
    {
        $username = SQLUtils::FormatValue(strtolower($username));
        $query = @mysql_query("SELECT user_id
                                FROM " . TABLE_USERS . "
                                WHERE LCASE(username) = '$username';");    
        if(!$query) {
            return false;
        }
        else if(mysql_num_rows($query) < 1) {
            return false;
        } else {
            while ($row = @mysql_fetch_assoc($query)) {
                return $row['user_id'];
            }
        }
    }

    
    function MatchLogin($loginName, $loginPasswd)
    {
        $returned = false;

        $loginPasswd = md5($loginPasswd);
        $loginName = SQLUtils::FormatValue(strtolower($loginName));
        
        $try = @mysql_query(" SELECT user_id
                            FROM " . TABLE_USERS . "
                            WHERE LCASE(username) = '$loginName'
                              AND user_passwd ='$loginPasswd'                          
                              ;");

        if($try && ( ($count = @mysql_num_rows($try)) == 1 ) ) {
            while($row = @mysql_fetch_assoc($try)) {
                $returned = $row['user_id'];
            }
        }
        else echo mysql_error();

        return $returned;
    }


    function IsUserNameExist($username)
    {
        $username = SQLUtils::FormatValue(strtolower($username));
        $query = @mysql_query("SELECT username
                                FROM " . TABLE_USERS . "
                                WHERE LCASE(username) = '$username';");    
        if(!$query) {
            return false;
        }
        else if(mysql_num_rows($query) > 0) {
            return true;
        } else {
            return false;
        }
    }
    function IsUserEmailExist($email) {

        $email = SQLUtils::FormatValue(strtolower(trim($email)));
        $query = @mysql_query("SELECT user_email
                                FROM " . TABLE_USERS . "
                                WHERE LCASE(user_email) = '$email';");    
        if(!$query) {
            return false;
        }
        else if(mysql_num_rows($query) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function GetIDByEmail($email) 
    {
        $email = SQLUtils::FormatValue(strtolower(trim($email)));
        $query = @mysql_query("SELECT user_id
                                FROM " . TABLE_USERS . "
                                WHERE LCASE(user_email) = '$email';");    
        if(!$query) {
            return '';
        }
        else if(mysql_num_rows($query) < 1) {
            return '';
        } else {
            while ($row = @mysql_fetch_assoc($query)) {
                return $row['user_id'];
            }
        }
    }

    function GetUsername($user_id) {

        $query = @mysql_query("SELECT username
                                FROM " . TABLE_USERS . "
                                WHERE user_id = '$user_id';");    
        if(!$query) {
            return '';
        }
        else if(mysql_num_rows($query) < 1) {
            return '';
        } else {
            while ($row = @mysql_fetch_assoc($query)) {
                return $row['username'];
            }
        }
    }
    function GetUserFullName($user_id) {

        $query = @mysql_query("SELECT user_firstname, user_lastname
                                FROM " . TABLE_USERS . "
                                WHERE user_id = '$user_id';");    
        if(!$query) {
            return '';
        }
        else if(mysql_num_rows($query) < 1) {
            return '';
        } else {
            while ($row = @mysql_fetch_assoc($query)) {
                return $row['user_firstname'] . ' ' . $row['user_lastname'];
            }
        }
    }


    function IsDisabled($user_id) {

        $query = @mysql_query("SELECT user_id, user_status
                                FROM " . TABLE_USERS . "
                                WHERE user_id = '$user_id'
                                    AND (user_status = '" . USER_DISABLED . "')
                                ;");    
        if(!$query) {
            echo mysql_error();
            return true;
        }
        else if(mysql_num_rows($query) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function DisableUser($user_id) {
        $query = @mysql_query("UPDATE " . TABLE_USERS . "
                                SET user_status = '" . USER_DISABLED . "'
                                WHERE user_id = '$user_id';");    
        if(!$query) {
            return false;
        } else {
            return true;
        }
    }

    function EnableUser($user_id) {
        $query = @mysql_query("UPDATE " . TABLE_USERS . "
                                SET user_status = '" . USER_ENABLED. "'
                                WHERE user_id = '$user_id';");    
        if(!$query) {
            return false;
        } else {
            return true;
        }
    }

    
    function GetAdmins()
    {
        $list = array();
        
        $query = @mysql_query("SELECT *
                                FROM " . TABLE_USERS . "
                                WHERE user_level = '" . ACCESS_SA . "'
                                    OR user_level = '" . ACCESS_AADMIN . "'
                                ;");    
        if(!$query) {
        }
        else if(mysql_num_rows($query) < 1) {
            
        } else {
            while ($row = @mysql_fetch_assoc($query)) {
                $list[] = new UserAccount($row['user_id'], $row);
            }
        }        
        return $list;
    }
}

?>