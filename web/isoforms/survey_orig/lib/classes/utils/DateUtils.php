<?php
// $Source$
// $Id$


class DateUtils
{
    
    function DUFormat($format, $datetime)
    {
        return date($format, strtotime($datetime));
    }
    
    function ConvertToGMT($datetime)
    {
        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET')) 
            define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);

        return date('Y-m-d H:i:s', strtotime($datetime) - TIME_OFFSET);
    }


    function ConvertFromGMT($datetime)
    {
                
        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET')) 
            define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);

        return date('Y-m-d H:i:s', strtotime($datetime) + TIME_OFFSET);
    }

    // DUDate() simulate date(), but return time according to specified offset time
    function DUDate($format)
    {
                
        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET')) 
            define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);


        return gmdate($format, mktime() + TIME_OFFSET);
    }

    // DUNow() simulates MySQL NOW(), returned time is according to offset time
    function DUNow()
    {
                
        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET')) 
            define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);


        return gmdate('Y-m-d H:i:s', mktime() + TIME_OFFSET);
    }

    // simulates MySQL NOW(), returned time is in GMT
    function GMNow()
    {
        return gmdate('Y-m-d H:i:s');
    }
    
    function GMTimeStamp()
    {
        $gmt = gmdate('Y-m-d H:i:s');
        // echo $gmt;
        $gmts = strtotime($gmt);
        // echo $gmts;
        
        
        return $gmts;
    }
}
?>