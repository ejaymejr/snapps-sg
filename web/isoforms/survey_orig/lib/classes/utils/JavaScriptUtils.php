<?php
// $Source$
// $Id$

class JavaScriptUtils
{
    

    function JavaScriptUtils()
    {
    }


    function PopulateCountryCities($countryList, $zeroCity = false)
    {
        $tmp = "\nvar countryList = new Array();\n";
        for ($i = 0; $i < sizeof($countryList); $i++) {
            $tmp .= "countryList[" . $i . "] = new Array();\n";            
        }
        $tmp .= "\n";
        
        $i = 0;
        foreach ($countryList as $country) {
            
            $ID = $country[0];
            $name = $country[1];

            $tmp .= "countryList[" . $i . "]['id'] = " . $ID . ";\n";
            $tmp .= "countryList[" . $i . "]['cities'] = new Array();\n";            
            
            $query = @mysql_query("
                SELECT * 
                FROM " . TABLE_CITIES . "
                WHERE country_id = '$ID'
                ORDER BY city_name ASC
                ;");
            if(!$query) echo mysql_error();
            else {
                $j = 0;

                if ($zeroCity) {                   
                    $tmp .= 'countryList[' . $i . '][\'cities\'][' . $j . '] = ' . 
                            'new Array(0, \'- City -\');' . 
                            "\n";
                    $j++;
                }

                while($row = mysql_fetch_assoc($query)) {                    
                    $tmp .= 'countryList[' . $i . '][\'cities\'][' . $j . '] = ' . 
                            'new Array(' . $row['city_id'] . ', \'' . 
                                           HTMLForm::FormatJSValue($row['city_name']) . '\');' . 
                            "\n";
                    $j++;
                }
            }
            $tmp .= "\n";
            $i++;
        }
        return $tmp;
    }
}

?>