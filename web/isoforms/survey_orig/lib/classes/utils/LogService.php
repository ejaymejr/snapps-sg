<?php
// $Source$
// $Id$


class LogService
{
    
    function LogService() 
    {
    }
    
    function LogErrorToDB($category, $text, $userID)
    {
        $text = SQLUtils::FormatValue($text);
        $query = @mysql_query("INSERT INTO " . TABLE_ERROR_LOG . "
                                SET user_id = '$userID',
                                    category = '$category',
                                    log_text = '$text',
                                    log_date = '" . DateUtils::GMNow() . "'
                                ;");
        if($query) return mysql_insert_id();
        else return false;
    }
    
    function LogUserAction($userID, $text)
    {
        $text = SQLUtils::FormatValue($text);
        $query = @mysql_query("INSERT INTO " . TABLE_USERS_LOG . "
                                SET user_id = '$userID',
                                    log_text = '$text',
                                    log_date = '" . DateUtils::GMNow() . "',
                                    ip_address = '" . $_SERVER['REMOTE_ADDR'] . "',
                                    ip_forwarded_to = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "'
                                ;");
        if($query) return mysql_insert_id();
        else return false;
    }


    function LogVisitorAction($currentLogin, $text, $newhit = true, $excludeFile)
    {
        if(LogService::IsExcluded($excludeFile)) {
            return false;
        }

        $sessID = strtolower(session_id());

        $postDate = gmdate("Y-m-d H:i:s");
        $postDate2 = gmdate("Y-m-d");

        $hitQuery = '';
        if($newhit) $hitQuery = ', hit_count = hit_count + 1 ';

        $userQuery = '';
        if(!$currentLogin && sizeof($currentLogin->info) && $currentLogin->info['user_id']) {
            $userQuery = ", user_id = '" . $currentLogin->info['user_id'] . "' ";
        }

        $query = mysql_query("SELECT COUNT(*) as total
                                FROM " . TABLE_VISITORS_LOG . "
                                WHERE LCASE(session_id) = '$sessID'
                                ;");
        if(!$query) {
            echo mysql_error();
            return false;
        }
        else {
            $row = mysql_fetch_array($query);
            $tmpUserID = (is_object($currentLogin) && $currentLogin->info['user_id']) ? $currentLogin->info['user_id'] : '0';

            if($row['total']) {            
                // update daily hit counter            
                LogService::UpdateDailyHit($postDate2);

                $logText = $postDate . ' ' . $tmpUserID .  ' ' . SQLUtils::FormatValue($text);
                $update = mysql_query("UPDATE " . TABLE_VISITORS_LOG . "
                                        SET
                                            session_update_time = '$postDate',
                                            log_text = CONCAT('$logText', \"\n\", log_text),
                                            ip_address = '" . $_SERVER['REMOTE_ADDR'] . "',
                                            ip_forwarded_to = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "'

                                            $hitQuery
                                            $userQuery

                                        WHERE LCASE(session_id) = '$sessID'
                                        ;");
                if(!$update)  {
                    echo mysql_error();
                    return false;
                }
                else return true;

            } else {

                // update daily visit counter         
                LogService::UpdateDailyVisit($postDate2);

                $logText = $postDate . ' ' . $tmpUserID .  ' ' . $text;
                $insert = mysql_query("INSERT INTO " . TABLE_VISITORS_LOG . "
                                        SET
                                            session_id = '$sessID',
                                            session_start_time = '$postDate',
                                            session_update_time = '$postDate',
                                            log_text = '$logText',
                                            ip_address = '" . $_SERVER['REMOTE_ADDR'] . "',
                                            ip_forwarded_to = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "',
                                            user_agent = '" . $_SERVER['HTTP_USER_AGENT'] . "',
                                            referer = '" . $_SERVER['HTTP_REFERER'] . "'
                                            $hitQuery
                                            $userQuery
                                                
                                        ;");
                if(!$insert)  {
                    echo mysql_error();
                    return false;
                }
                else return true;
            }
        }
    }





        
    function GetCount()
    {
        $tmp = array();
        $tmp['visit'] = 0;
        $tmp['hit'] = 0;
        $tmp['visit_today'] = 0;
        $tmp['hit_today'] = 0;
        
        $todaydate = gmdate("Y-m-d");

        $query = mysql_query("SELECT * FROM " . TABLE_DAILY_COUNTER . "
                                WHERE visit_date = '$todaydate'
                                ;");
        if($query) {
            $row = mysql_fetch_array($query);
            $tmp['visit_today'] = $row['visit_count'];
            $tmp['hit_today'] = $row['hit_count'];
        }
        $query = mysql_query("SELECT SUM(visit_count) as visit_total,
                                    SUM(hit_count) as hit_total
                                FROM " . TABLE_DAILY_COUNTER . "
                                ;");
        if($query) {
            $row = mysql_fetch_array($query);
            $tmp['visit'] = $row['visit_total'];
            $tmp['hit'] = $row['hit_total'];
        }        
        return $tmp;
    }


    function UpdateDailyHit($postDate)
    {
        $query = mysql_query("SELECT COUNT(*) as total
                                FROM " . TABLE_DAILY_COUNTER . "
                                WHERE visit_date = '$postDate'
                                ;");
        if(!$query) {
            echo mysql_error();
            return false;
        }
        else {
            $row = mysql_fetch_array($query);

            if($row['total']) {

                $update = mysql_query("UPDATE " . TABLE_DAILY_COUNTER . "
                                        SET 
                                            hit_count = hit_count + 1
                                        WHERE visit_date = '$postDate'
                                        ;");
                if(!$update)  {
                    echo mysql_error();
                    return false;
                }
                else return true;

            } else {

                $insert = mysql_query("INSERT INTO " . TABLE_DAILY_COUNTER . "
                                        SET visit_count = 1,
                                            hit_count = 1,
                                            visit_date = '$postDate'
                                        ;");
                if(!$insert)  {
                    echo mysql_error();
                    return false;
                }
                else return true;
            }
        }
    }


    function UpdateDailyVisit($postDate)
    {
        $query = mysql_query("SELECT COUNT(*) as total
                                FROM " . TABLE_DAILY_COUNTER . "
                                WHERE visit_date = '$postDate'
                                ;");
        if(!$query) {
            echo mysql_error();
            return false;
        }
        else {
            $row = mysql_fetch_array($query);

            if($row['total']) {

                $update = mysql_query("UPDATE " . TABLE_DAILY_COUNTER . "
                                        SET visit_count = visit_count + 1,
                                            hit_count = hit_count + 1
                                        WHERE visit_date = '$postDate'
                                        ;");
                if(!$update)  {
                    echo mysql_error();
                    return false;
                }
                else return true;

            } else {

                $insert = mysql_query("INSERT INTO " . TABLE_DAILY_COUNTER . "
                                        SET visit_count = 1,
                                            hit_count = 1,
                                            visit_date = '$postDate'
                                        ;");
                if(!$insert)  {
                    echo mysql_error();
                    return false;
                }
                else return true;
            }
        }
    }





    function IsExcluded($excludeFile)
    {
        $tmp = false;
        

        if(file_exists($excludeFile)) {
            
            $list = file($excludeFile);
            if(sizeof($list)) {
                
                foreach($list as $excl) {
                    
                    $excl = strtolower(trim($excl));
                    if(@strpos(strtolower($_SERVER['HTTP_USER_AGENT']), $excl) !== false) {
                        $tmp = true;
                        break;
                    }
                    /*
                    else if(@strpos(strtolower($_SERVER['REMOTE_ADDR']), $excl) !== false) {
                        $tmp = true;
                        break;
                    } else if(@strpos(strtolower($_SERVER['HTTP_X_FORWARDED_FOR']), $excl) !== false) {
                        $tmp = true;
                        break;
                    }
                    */
                }
            }
        }
        return $tmp;
    }

}   

?>