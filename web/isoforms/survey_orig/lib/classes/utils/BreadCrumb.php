<?php
// $Source$
// $Id$

class BreadCrumb
{

    var $errorMsg;
    var $members;
    var $separator = ' &raquo; ';

    function BreadCrumb()
    {
        $this->errorMsg = new MessageHandler();
        $this->members = array();
    }

    function addMember($name, $url)
    {
        $this->members[] = array($name, $url);
    }
    
    function setSeparator($separator)
    {
    	$this->separator = $separator;
    }
    function displayHTML()
    {
        $tmp = array();
        if (sizeof($this->members) > 0) {
            
            foreach ($this->members as $member) {

                if ($member[1] != '') {
                    $tmp[] = '<a href="' . $member[1] . '">' . $member[0] . '</a>';
                } else {
                    $tmp[] = $member[0];
                }
            }
        }

        $display = implode($this->separator, $tmp);
        echo $display;
    }
}

?>