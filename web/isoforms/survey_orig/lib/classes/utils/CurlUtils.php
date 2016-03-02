<?php
// $Source$
// $Id$

class CurlUtils
{
    var $callback = false;
   
    function CurlUtils()
    {
    }
    
    function setCallback($func_name) {
       $this->callback = $func_name;
    }
    function doRequest($method, $url, $vars) {
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_HEADER, 1);
       curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       if ($method == 'POST') {
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
       }
       $data = curl_exec($ch);
       curl_close($ch);
       if ($data) {
           if ($this->callback)
           {
               $callback = $this->callback;
               $this->callback = false;
               return call_user_func($callback, $data);
           } else {
               return $data;
           }
       } else {
           return curl_error($ch);
       }
    }
    function Get($url) {
       return $this->doRequest('GET', $url, 'NULL');
    }
    function Post($url, $vars) {
       return $this->doRequest('POST', $url, $vars);
    }
}

?>
