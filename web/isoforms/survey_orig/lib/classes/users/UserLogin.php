<?php
// $Source$
// $Id$

class UserLogin
{    
    var $SALT = "martes5";

    var $ID = false;
    var $info = array();
    function UserLogin($userID)
    {
        $tmp = new UserAccount($userID);
        if($tmp->ID) {
            $this->ID = $tmp->ID;
            $this->info = $tmp->info;

            $this->getLoginInfo();

            if ($this->info['user_level'] < 1) {
                $this->info['user_level'] = ACCESS_ANONYMOUS;
            }
        }       
    }

    

    // ##################### private methods
    function getLoginInfo()
    {
        if(!$this->ID) return false;

        $tmp = array();
        $query = @mysql_query("SELECT * FROM " . TABLE_USERS_LOGIN_INFO . "
                                WHERE user_id = '" . $this->ID . "';");
        if(!$query) echo mysql_error();
        else if(mysql_num_rows($query) > 0) {
            while ($row = mysql_fetch_array($query)) {
                $tmp = $row;
            }
        }
        $this->info = array_merge($this->info, $tmp);
        // $this->info['user_fullname'] = $this->info['user_firstname'] . ' ' . $this->info['user_lastname'];
        return true;
    }

    function updateLoginInfo()
    {
        if(!$this->ID) return false;

        $hashString = md5(date('l dS \of F Y h:i:s A') . rand() . $this->ID . $this->SALT);

        $check = @mysql_query("SELECT * FROM " . TABLE_USERS_LOGIN_INFO . "
                                WHERE user_id = '" . $this->ID . "';");
        if(!$check) echo mysql_error();
        else if(mysql_num_rows($check) > 0) {
            $query = @mysql_query("UPDATE " . TABLE_USERS_LOGIN_INFO . "
                                SET user_last_login = user_current_login,
                                    user_current_login = '" . DateUtils::GMNow() . "',
                                    user_current_session_id = '" . session_id() . "',
                                    user_hash_string = '" . $hashString . "'
                                WHERE user_id = '" . $this->ID . "';");
            if(!$query) echo mysql_error();
        } 
        else {
            $query = @mysql_query("INSERT INTO " . TABLE_USERS_LOGIN_INFO . "
                                SET user_id = '" . $this->ID . "',
                                    user_current_login = '" . DateUtils::GMNow() . "',
                                    user_current_session_id = '" . session_id() . "',
                                    user_hash_string = '" . $hashString . "'
                                ;");
            if(!$query) echo mysql_error();
        }
        $this->info['user_hash_string'] = $hashString;
    }

    function updateHashString()
    {
        if(!$this->ID) return false;

        $hashString = md5(date('l dS \of F Y h:i:s A') . rand() . $this->ID . $this->SALT);

        $query = @mysql_query("UPDATE " . TABLE_USERS_LOGIN_INFO . "
                            SET 
                                user_hash_string = '" . $hashString . "'
                            WHERE user_id = '" . $this->ID . "';");
        if(!$query) echo mysql_error();

        $this->info['user_hash_string'] = $hashString;
    }
}

?>