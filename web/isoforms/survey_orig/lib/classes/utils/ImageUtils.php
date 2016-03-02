<?php
/*
 * Created on Jun 5, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 

class ImageUtils
{
    function ImageUtils()
    {
    }
    
    function IconPDF($enabled = true)
    {
        $str = '';
        
        $src = PATH_TEMPLATE . 'images/icon-pdf-30.jpg';
        if (!$enabled) $src = PATH_TEMPLATE . 'images/icon-pdf-30-disabled.jpg';
        $str = '<img class="icon"
            src="' . $src . '"
            alt="PDF" />';
        return $str;
    }
    function IconEmail($enabled = true)
    {
        $str = '';
          
        $src = PATH_TEMPLATE . 'images/icon-email-28.jpg';
        if (!$enabled) $src = PATH_TEMPLATE . 'images/icon-email-28-disabled.jpg';
        $str = '<img class="icon"
            src="' . $src . '"
            alt="Email" />';
        return $str;
    }
}
?>
