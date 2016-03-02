<?php
/*
 * Created on May 24, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class UserUtils
{
    function UserUtils()
    {
    }
    
    function GetFullName($username)
    {
        $fullname = '';
        $Lusername = strtolower($username);
        $sql = "
            SELECT * FROM " . TABLE_USERS . "
            WHERE LCASE(username) = '" . $username . "'
            LIMIT 1
        ";
        $query = @mysql_query($sql);
        if (!$query) {
            
        } else {
            while ($row = mysql_fetch_assoc($query)) {
                $fullname = $row['user_firstname'] . ' ' . $row['user_lastname'];
            } 
        }
        
        if ($fullname == '') $fullname = $username;
        return $fullname;
    }
    
    function GetAdminListOptions()
    {
        $list = array();
        $sql = "
            SELECT * FROM " . TABLE_USERS . "
            WHERE user_status = '" . USER_ENABLED . "'
                AND user_level = '" . ACCESS_ADMIN . "'
            ORDER BY username ASC
        ";
        $query = @mysql_query($sql);
        if (!$query) {
            
        } else {
            while ($row = mysql_fetch_assoc($query)) {
                $list[] = array($row['username'], $row['user_firstname'] . ' ' . $row['user_lastname']);
            } 
        }
        return $list;
    }
    
    function BuildEmailRecipient($login)
    {
        return $login->info['user_firstname'] . 
                ' ' . $login->info['user_lastname'] . 
                ' <' . $login->info['user_email'] . '>';
    }
}
?>
