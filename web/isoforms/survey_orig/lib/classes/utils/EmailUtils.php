<?php
/*
 * Created on Jun 6, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class EmailUtils
{
    function EmailUtils()
    {
    }
    
    function ParseEmailName($text)
    {
        $tmp = array();
        $tmp['name'] = '';
        $tmp['address'] = '';
        $tmp['string'] = '';
        
        $fields = explode('<', $text);
        // var_dump($fields);
        if (sizeof($fields) < 2) {
            $tmp['address'] = trim($fields[0]);   
        } else {
            $tmp['name'] = trim($fields[0]);
            $tmp['address'] = trim(str_replace('>', '', $fields[1]));   
        }
        
        $tmp['string'] = $tmp['address'];
        if ($tmp['name'] != '') {
            $tmp['string'] = $tmp['name'] . ' <' . $tmp['address'] . '>';
        }
        
        // var_dump($tmp);
        return $tmp;
    }
}
?>
