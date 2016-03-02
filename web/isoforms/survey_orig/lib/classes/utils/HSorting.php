<?php
// $Source$
// $Id$


class HSorting
{
    
    function UpdateSorting($sortingOptions, $sort, $order, $browseURL)
    {                
        foreach($sortingOptions as $sortID => $option) {
            if(strtolower($order) == 'asc') $newSortOrder = 'desc';
            else $newSortOrder = 'asc';
            if($sort != $option['sortname']) {
                $newSortOrder = strtolower($option['order']);
            }    
            $linkWord = $option['heading'];
            if($sort == $option['sortname']) {
                $linkWord = '<span class="dataGridTableHeaderCurrentSorting"><b>' . $option['heading'] . '</b></span>';
            }
            $headingURL = $browseURL . '&page=1&sort=' . $option['sortname'] . '&order=' . $newSortOrder;
            $headingLink = '<a href="' . $headingURL . '">' . $linkWord . '</a>';

            $sortingOptions[$sortID]['headingURL'] = $headingURL;
            $sortingOptions[$sortID]['headingLink'] = $headingLink;
            $sortingOptions[$sortID]['order'] = $newSortOrder;
        }        
        return $sortingOptions;
    }
}

?>