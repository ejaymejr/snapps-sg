<?php
// $Source$
// $Id$

/*
ini_set("display_errors", 1);

$NAV = new NavigationPaging();
$NAV->setInfo($_SERVER['PHP_SELF'] . "?q=" . stripslashes($_GET['q']) . "&qf=part_no&sort=part_no&order=desc",
                $_GET['page'], 130, 10, 10);
$NAV->addFilterField('text', 'q', stripslashes($_GET['q']), ' size="10" ');
echo $NAV->getContents();
*/

class NavigationPaging {      
       
    var $originalURL;
    var $URL;
    var $currentPageNumber;
    var $totalRecord;
    var $totalPage;
    var $totalPageDisplay;

    var $startPage;
    var $endPage;

    var $totalRecordString;
    var $totalPageString;

    var $displayFilter;
    var $displayPaging;

    var $baseURL;
    var $urlParamString;
    var $urlParams;

    var $filterFORMFields;
    var $filterFORMHiddenFields;

    var $pagingFORMFields;
    var $pagingFORMHiddenFields;

    function NavigationPaging()
    {
        $this->originalURL = '';
        $this->URL = '';

        $this->currentPageNumber = 0;
        $this->totalRecord = 0;
        $this->totalPage = 0;
        $this->totalPageDisplay = 0;

        $this->startPage = false;
        $this->endPage = false;

        $totalRecordString = '';
        $totalPageString = '';

        $this->displayFilter = true;
        $this->displayPaging = true;
        
        $baseURL = '';
        $urlParamString = '';
        $urlParams = array();

        $filterFORMFields = array();
        $filterFORMHiddenFields = array();

        $pagingFORMFields = array();
        $pagingFORMHiddenFields = array();
    }
    function setInfo($url, $curPage, $totalRecord, $totalPage, $noOfDisplay = 5) 
    {
        $this->setURL($url);
        $this->setCurrentPageNumber($curPage);
        $this->setTotalRecord($totalRecord);
        $this->setTotalPage($totalPage);
        $this->setNumberOfPaging($noOfDisplay);
    }
    function setURL($url)
    {
        $this->originalURL = $url;
        $this->URL = $url;
    }
    function setCurrentPageNumber($page)
    {
        $this->currentPageNumber = $page;
    }
    function setTotalRecord($total)
    {
        $this->totalRecord = $total;
    }
    function setTotalPage($total)
    {
        $this->totalPage = $total;
    }    
    function setNumberOfPaging($total = 5)
    {
        $this->totalPageDisplay = $total;
    }
    function setFilterDisplay($display = true)
    {
        $this->displayFilter = $display;
    }
    function setPagingDisplay($display = true)
    {
        $this->displayPaging = $display;
    }


    function parseURL()
    {
        $tmpURL = '';
        $paramString = '';
        $params = array();

        $separatorPos = strpos($this->originalURL, '?');
        if($separatorPos === FALSE) $tmpURL = $this->originalURL;
        else {
            $tmpURL = substr($this->originalURL, 0, $separatorPos);

            $paramString = substr($this->originalURL, $separatorPos + 1);
            if(strlen($paramString)) {
                parse_str($paramString, $params);
            }
        }

        $this->baseURL = $tmpURL;
        $this->urlParamString = $paramString;
        $this->urlParams = $params;

        $newURL = $this->baseURL . '?';
        if(sizeof($this->urlParams)) {
            foreach($this->urlParams as $key => $value) { 
                $value = stripslashes($value);
                $newURL .= '&' . $key . '=' . urlencode($value);
            }
        }

        $this->URL = $newURL;
    }

    function addFilterField($type, $name, $value, $params, $options = array())
    {
        $this->filterFORMFields[] = array($type, $name, $value, $params, $options);        
    }

    function prepareFORMFilterHiddenFields()
    {    
        $hiddenFields = array();
        if(sizeof($this->urlParams)) {
            foreach($this->urlParams as $key => $value) {

                if($this->getFilterFieldIndex($key) < 0) {
                    $hiddenFields[] = array('hidden', $key, $value);
                }
            }
        }
        $this->filterFORMHiddenFields = $hiddenFields;
    }
    function getFilterFieldIndex($key)
    {   
        $index = -1;
        if(sizeof($this->filterFORMFields)) {
            
            $count = 0;
            foreach($this->filterFORMFields as $field) {
                if($field[1] == $key) {
                    $index = $count;
                    break;
                }
                $count++;
            }
        }
        return $index;
    }
    
    function prepareFORMPagingFields()
    {
        $hiddenFields = array();

        if(sizeof($this->urlParams)) {
            foreach($this->urlParams as $key => $value) {
                $hiddenFields[] = array('hidden', $key, $value);
            }
        }

        $this->pagingFORMHiddenFields = $hiddenFields;

        $fields = array();
        $fields[] = array('text', 'page', $this->currentPageNumber, ' size="5" ');
        $this->pagingFORMFields = $fields;
    }
    


    function process()
    {
        $this->parseURL();
        $this->prepareFORMFilterHiddenFields();
        $this->prepareFORMPagingFields();

        if($this->totalRecord == 1) {
            $this->totalRecordString = '<b>One</b> record';
        } else {
            $this->totalRecordString = '<b>' . $this->totalRecord. '</b> records';
        }
        if($this->totalPage == 1) {
            $this->totalPageString = '<b>One</b> page';
        }
        else {
            $this->totalPageString = '<b>' . $this->totalPage . '</b> pages';
        }



        $startPage = false;
        $endPage = false;        
        if($this->totalPageDisplay < 3) $this->totalPageDisplay = 3;
        $midPoint = floor( $this->totalPageDisplay / 2 );

        if($this->currentPageNumber <= $midPoint) {
            $startPage = 1;
            $endPage = $startPage + $this->totalPageDisplay - 2;
        } else {
            $startPage = $this->currentPageNumber - $midPoint + 1;
            $endPage = $startPage + $this->totalPageDisplay - 3;
        }
        
        if($this->currentPageNumber >= ($this->totalPage - $midPoint)) {
            $endPage = $this->totalPage;
            $startPage = $endPage - $this->totalPageDisplay + 2;
        }
        if($startPage < 1) $startPage = 1;
        if($endPage > $this->totalPage) $endPage = $this->totalPage;

        $this->startPage = $startPage;
        $this->endPage = $endPage;

    }

    function getContents()
    {
        $this->process();

        $returned = '';
        
        $returned .= '
        <table width="95%" cellpadding="2" cellspacing="0" border="0">
        <tr>
        ';


        $returned .= '
        <td width="5%" nowrap class="alignLeft alignMiddle">            
        ';
        if($this->displayFilter) {
            $returned .= $this->getFilterFORM();
        }
        $returned .= '
        </td>        
        ';
        
        $returned .= '
        <td width="5%" nowrap class="alignLeft alignMiddle">            
        ' . $this->totalRecordString . ' in ' . $this->totalPageString . '
        </td>        
        ';
        
        $returned .= '
        <td width="90%" nowrap class="alignRight alignMiddle">            
        ';
        
        if($this->displayPaging) {
            $returned .= $this->getPagingFORM();
        }
        $returned .= '
        </td>        
        ';


        $returned .= '
        </tr>
        </table>
        ';

        return $returned;
    }

    function getContentsMultiLine()
    {
        $this->process();

        $returned = '';
        
        $returned .= '
        <table width="95%" cellpadding="2" cellspacing="0" border="0">
        <tr>
        ';


        $returned .= '
        <td nowrap class="alignLeft alignMiddle">            
        ';
        if($this->displayFilter) {
            $returned .= $this->getFilterFORM();
        }
        $returned .= '
        </td>        
        </tr>
        ';
        
        $returned .= '
        <tr>
        <td nowrap class="alignCenter alignMiddle">            
        ' . $this->totalRecordString . ' in ' . $this->totalPageString . '
        </td>
        </tr>
        ';
        
        $returned .= '
        <tr>
        <td nowrap class="alignCenter alignMiddle">            
        ';
        
        if($this->displayPaging) {
            $returned .= $this->getPagingFORM();
        }
        $returned .= '
        </td>        
        ';


        $returned .= '
        </tr>
        </table>
        ';

        return $returned;
    }

    function getFilterFORM()
    {
        $returned = '';
        // ####### Filter FORM #############        
        $returned .= '    
        <form style="display:inline;" name="FORMpaging_form" action="' . $this->baseURL . '" method="get">
        ';

        $displaySubmit = false;
        if(sizeof($this->filterFORMHiddenFields)) {
            foreach($this->filterFORMHiddenFields as $field) {
                $returned .= HTMLForm::DrawInput($field);
            }
        }
        if(sizeof($this->filterFORMFields)) {
            $displaySubmit = true;
            foreach($this->filterFORMFields as $field) {
                $returned .= HTMLForm::DrawInput($field);
            }
        }
        if($displaySubmit) {
            $returned .= '
            <input size="5" class="submit-button" type="submit" name="go" value="Filter" />                    
            <input size="5" class="submit-button" type="submit" name="clear" value="Clear" />
            ';
        }

        $returned .= '
        </form>  
        ';
        // ########## end of Filter FORM #######################

        return $returned;
    }

    
    function getPagingForm()
    {
        $returned = '';

        if($this->totalPage > 1) {

            $pageNumbers = '';
            if($this->currentPageNumber != 1 && $this->startPage > 1)
            {
                $pageNumbers .= ' <a title="First Page" href="' . $this->URL .'&amp;page=1">1</a> ';
                if($this->startPage != 2) {
                    $pageNumbers .= ' ... ';
                }
                $pageNumbers .= ' &nbsp; ';
            }
            for($s = $this->startPage; $s <= $this->endPage; $s++)
            {
                if($this->currentPageNumber == $s) 
                    $pageNumbers .= ' <b>' . $s . '</b> &nbsp; ';
                else $pageNumbers .=    
                        ' <a  href="' . $this->URL . 
                        '&amp;page=' . $s . '">' . $s . 
                        '</a> &nbsp; ';

            }
            if($this->currentPageNumber != $this->totalPage && $this->endPage < $this->totalPage)
            {
                if($this->endPage != ($this->totalPage - 1)) {
                    $pageNumbers .= ' ... ';
                }
                $pageNumbers .= ' <a title="Last Page" href="' . 
                                        $this->URL .'&amp;page=' .$this->totalPage .
                                        '">' . $this->totalPage . '</a>';
                $pageNumbers .= ' &nbsp; ';
            }


            $pageInput = '';
            if($this->totalPage > 1) {
                $pageInput .= '
                    <input class="text-field alignCenter" size="3" type="text" name="page" 
                        value="' . $this->currentPageNumber . '" />                            
                    <input class="submit-button" type="submit" name="go" value="Go" />
                    ';
            }

            
            $prevImg = '<img class="inline-image-button" 
                            src="' . PATH_TEMPLATE . '/images/buttons/button_previous.png" />';
            $nextImg = '<img class="inline-image-button" 
                            src="' . PATH_TEMPLATE . '/images/buttons/button_next.gif" />';

            $prevNext = '';
            if($this->currentPageNumber != 1)
            {
                $s = $this->currentPageNumber - 1;
                $prevNext .= ' <a title="Previous Page" href="' . $this->URL .'&amp;page='. $s .'">Prev</a>';
                // $prevNext .= ' <a title="Previous Page" href="' . $this->URL .'&amp;page='. $s .'">' . $prevImg . '</a>';
            } else {
                $prevNext .= ' Prev';
                // $prevNext .= ' ' . $prevImg;
            }

            if($this->currentPageNumber != $this->totalPage)
            {
                $s = $this->currentPageNumber + 1;
                $prevNext .= ' | <a title="Next Page" href="' . $this->URL .'&amp;page='. $s .'"> Next</a>';
                // $prevNext .= ' <a title="Next Page" href="' . $this->URL .'&amp;page='. $s .'">' . $nextImg . '</a>';
            } else {
                // $prevNext .= ' ' . $nextImg;
                $prevNext .= ' | Next';
            }





  
    
            $returned .= '   
            <form style="display:inline;" name="FORMpaging_form" 
                    action="' . $this->baseURL . '" method="get">

            ';                
            if(sizeof($this->pagingFORMHiddenFields)) {
                foreach($this->pagingFORMHiddenFields as $field) {
                    $returned .= HTMLForm::DrawInput($field);
                }
            }

            $returned .= $pageNumbers;
            // $returned .= '<br />';
            $returned .= $prevNext;
            $returned .= ' &nbsp; ' . $pageInput;

            $returned .= '            
            </form>
            ';

        }
        return $returned;
    }
   
    
}

?>