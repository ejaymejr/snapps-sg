<?php
// $Source$
// $Id$

class FileUtils
{
    
    function FileUtils()
    {

    }

    function IsImage($type)
    {
        $VALID_IMAGE_TYPES = array (
            'image/jpg',
            'image/jpeg',
            'image/pjpeg',
            'image/gif',
            'image/png'
        );
        
        if(sizeof($VALID_IMAGE_TYPES)) {
            if(in_array($type, $VALID_IMAGE_TYPES)) return true;
            else return false;
        } else return true;
    }

    function IsFlash($type)
    {
        $VALID_FLASH_TYPES = array (
            'application/x-shockwave-flash'
        );
        
        if(sizeof($VALID_FLASH_TYPES)) {
            if(in_array($type, $VALID_FLASH_TYPES)) return true;
            else return false;
        } else return true;
    }
        
    function FilterFolderName($name)
    {
        // shorten more than one whitespace to a single space only
        $name = preg_replace('/(\s+)/i', ' ', $name);

        $pattern = '/[^' . VALID_FILENAME_CHARS . ']/i';
        // now replace the unallowable characters with default substitute
        $name = preg_replace($pattern, FILENAME_CHAR_SUB, $name);

        return $name;
    }


    function FilterFileName($name)
    {
        // shorten more than one whitespace to a single space only
        $name = preg_replace('/(\s+)/i', ' ', $name);

        $pattern = '/[^' . VALID_FILENAME_CHARS . ']/i';
        // now replace the unallowable characters with default substitute
        $name = preg_replace($pattern, FILENAME_CHAR_SUB, $name);

        return $name;
    }


    function AddTrailingSlash($text)
    {
        // first we strip the trailing slash
        $hasTrailingSlash = ('/' == substr($text, -1));
        while($hasTrailingSlash) {
            $text = substr($text, 0, strlen($text) - 1);
            $hasTrailingSlash = ('/' == substr($text, -1));
        }

        // return with one trailing slash   
        return $text . '/';
    }



    // return file name, without path
    function MakeFileNameUnique($folder, $fileName)
    {

        // debug
        // echo 'Trying to make unique.';
        $filePath = FileUtils::AddTrailingSlash($folder) . "/$fileName";

        // check filename and extension
        $lastPeriod = strrpos($fileName, '.');
        if($lastPeriod === false) {
            $name = $fileName;
            $ext = '';
        }
        else {
            $name = substr($fileName, 0, $lastPeriod);
            $ext = substr($fileName, $lastPeriod);
        }

        for($i = 1; ; $i++) {
            // debug:
            // echo "FilePath: $filePath.";

            if(file_exists($filePath)) {
                $fileName = $name . '_' . $i . $ext;
                $filePath = FileUtils::AddTrailingSlash($folder) . "/$fileName";
            }
            else {
                break;
            }
        }

        return $fileName;
    }

}

?>