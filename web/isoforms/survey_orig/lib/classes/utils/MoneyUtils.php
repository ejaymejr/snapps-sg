<?php
// $Source$
// $Id$

class MoneyUtils
{


    function Num2Word($num, $fract = 0) {
            require_once('Numbers/Words.php');

            $num = sprintf("%.".$fract."f", $num);
            $fnum = explode('.', $num);

            $ret =  Numbers_Words::toWords($fnum[0],"en_US");
            if(!$fract) return $ret;
            
            if ($fnum[1] > 0) {
                $ret .=  ' dollars and '; // point in english
                $ret .= Numbers_Words::toWords($fnum[1],"en_US");
                $ret .= ' cents';
            }
            
            
            $ret .= ' only';

            $ret = MoneyUtils::AndHundreds($ret);
            return $ret;
    }


    function AndHundreds($text)
    {
        $newText = $text;
        $textlen = strlen($text);

        $str = ' hundreds';
        $tmp = explode($str, $text);
        if (sizeof($tmp) > 1) {
            $newText = implode($str . ' and', $tmp);
        } else {

            $str = ' hundred';
            $tmp = explode($str, $text);
            if (sizeof($tmp) > 1) {
                $newText = implode($str . ' and', $tmp);
            } 
        }

        
        return $newText;
    }
}

?>