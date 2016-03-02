<?php
// $Source$
// $Id$


class FileUpload
{
    var $MAX_SIZE;
    var $UPLOAD_DIR;
    var $VALID_TYPES;
    var $OVERWRITE;

    var $theFile;
    var $status;
    var $info;
    var $errorMsg;

    function FileUpload($file)
    {
        $this->errorMsg = new MessageHandler();
        $this->MAX_SIZE = 0;
        $this->VALID_TYPES = array();
        $this->OVERWRITE = false;
        $this->UPLOAD_DIR = false;

        $this->status = UPLOAD_STATUS_EMPTY;
        $this->info = array();

        $this->theFile = $file;
    }

    function setParams($dir = false, $size, $types = array(), $overwrite = false)
    {
        $this->UPLOAD_DIR = $dir;
        $this->MAX_SIZE = $size;
        $this->VALID_TYPES = $types;
        $this->OVERWRITE = $overwrite;
    }

    function process()
    {
        if(!$this->theFile) return false;


        if(!file_exists($this->UPLOAD_DIR) || !is_dir($this->UPLOAD_DIR) ) {
            $this->errorMsg->addMsg('Upload Directory not found: ' . $this->UPLOAD_DIR);
            return false;
        } else if(!is_writable($this->UPLOAD_DIR) ) {
            $this->errorMsg->addMsg('Upload Directory not writable: ' . $this->UPLOAD_DIR);
            return false;
        } 
        
        
        $file = $this->theFile;
        $file['name'] = trim($file['name']);

        if(empty($file['name'])) {
            $this->errorMsg->addMsg('No File.');
            return false;
        } 

        // initialize with fail
        $this->status = UPLOAD_STATUS_FAIL;
        $this->info = array();

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileTmpName = $file['tmp_name'];
        
        $originalFileName = $fileName;
        $formatFileName = $fileName;

        if(!$this->IsValidType($fileType)) {
            $this->errorMsg->addMsg('File extension is not allowed.');
        }
        if(!$this->IsSizeOK($fileSize)) {
            $this->errorMsg->addMsg('Max file size is ' . $this->MAX_SIZE . ' bytes. 
                               Uploaded size is ' . $fileSize . ' bytes');
        }
        
        if(sizeof($this->errorMsg->msg) < 1) {
            $formatFileName = FileUtils::FilterFileName($fileName);
            $filePath = FileUtils::AddTrailingSlash($this->UPLOAD_DIR) . "/$formatFileName";
            
            if(file_exists($filePath)) {
                // debug: 
                // echo 'overwrite: ' . $overwrite;
                if($this->OVERWRITE) {
                    @unlink($filePath);
                }
                else {
                    $formatFileName = FileUtils::MakeFileNameUnique($this->UPLOAD_DIR, $formatFileName);
                    $filePath = FileUtils::AddTrailingSlash($this->UPLOAD_DIR) . "/$formatFileName";
                }
            }

            if(!@copy($fileTmpName, $filePath)) {
                //debug
                // echo('tmp name: ' . $fileTmpName);      
                $this->status = UPLOAD_STATUS_FAIL;
                $this->errorMsg->addMsg('Error while copying file in server.');
            }
            else {   
                $this->status = UPLOAD_STATUS_SUCCESS;
            }
            
            @unlink($fileTmpName);
        }


        $this->info['fileName'] = $formatFileName;
        $this->info['fileNameOriginal'] = $originalFileName;
        $this->info['fileSize'] = $fileSize;
        $this->info['fileType'] = $fileType;

        return $this->status;
    }



    function IsSizeOK($size)
    {
        if($this->MAX_SIZE > 0) {
            if($size > $this->MAX_SIZE) return false;
        }
        return true;
    }

    function IsValidType($type)
    {
        if(sizeof($this->VALID_TYPES)) {
            if(in_array($type, $this->VALID_TYPES)) return true;
            else return false;
        } else return true;
    }


}
?>