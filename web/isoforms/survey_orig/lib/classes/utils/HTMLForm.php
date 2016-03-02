<?php
// $Source$
// $Id$

class HTMLForm
{

    // wrapper
    function DrawInput($field)
    {
        $type = $name = $value = $params = '';
        $options = array();

        $totalField = sizeof($field);
        if($totalField > 0) $type = $field[0];
        if($totalField > 1) $name = $field[1];
        if($totalField > 2) $value = $field[2];        
        if($totalField > 3) $params = $field[3];
        if($totalField > 4) $options = $field[4];


        $tmp = '';
        if($type == 'text') {
            $tmp .= HTMLForm::DrawTextField($name, $value, $params);

        } else if($type == 'hidden') {
            $tmp .= HTMLForm::DrawHiddenField($name, $value, $params);

        } else if($type == 'dropdown') {
            $tmp .= HTMLForm::DrawDropDown($name, $value, $params, $options);
        }

        return $tmp;
    }

    
    function DrawTextField($name, $value, $params)
    {
        $value = HTMLForm::FormatFormValue($value);
        $tmp = '
        <input type="text" name="' . $name . '" value="' . $value . '"
            ' . $params . ' />
        ';
        return $tmp;
    }

    function DrawCheckBox($name, $value, $currentValue, $options = '')
    {
        $value = HTMLForm::FormatFormValue($value);
        $checked = strtolower($value) == strtolower($currentValue) ? ' checked' : false;
        $tmp = '
        <input type="checkbox" name="' . $name . '" 
            value="' . $value . '"' . $checked . $options . ' />
        ';
        return $tmp;
    }
    
    function DrawRadio($name, $value, $currentValue, $params)
    {
        $value = HTMLForm::FormatFormValue($value);
        $checked = strtolower($value) == strtolower($currentValue) ? ' checked' : false;
        $tmp = '
        <input type="radio" name="' . $name . '" 
            value="' . $value . '"' . $checked . ' ' . $params . '/>
        ';
        return $tmp;
    }

    function DrawTextArea($name, $value, $params)
    {
        $value = HTMLForm::FormatFormValue($value);
        $tmp = '
        <textarea name="' . $name . '"
            ' . $params . '>' . $value . '</textarea>
        ';
        return $tmp;
    }

    function DrawHiddenField($name, $value, $params)
    {
        $value = HTMLForm::FormatFormValue($value);
        $tmp = '
        <input type="hidden" name="' . $name . '" value="' . $value . '"
            ' . $params . ' />
        ';
        return $tmp;
    }

    function DrawDropDown($name, $value, $params, $options)
    {
        $tmp = '
        <select name="' . $name . '" ' . $params . '>
        ';
        if(sizeof($options)) {
            foreach($options as $option) {
                $selected = (strtolower($option[0]) == strtolower($value)) ? ' selected' : '';

                $optionValue = HTMLForm::FormatFormValue($option[0]);
                $tmp .= '
                <option value="' . $optionValue . '"' . $selected . '>' . $option[1] . '</option>
                ';


            }
        }
        $tmp .= '
        </select>
        ';
        return $tmp;
    }

    function DrawMultipleSelect($name, $selectedValues, $params, $options)
    {
        $tmp = '
        <select name="' . $name . '" multiple="multiple" ' . $params . '>
        ';
        if(sizeof($options)) {
            foreach($options as $option) {
                $selected = (in_array($option[0], $selectedValues)) ? ' selected' : '';

                $optionValue = HTMLForm::FormatFormValue($option[0]);
                $tmp .= '
                <option value="' . $optionValue . '"' . $selected . '>' . $option[1] . '</option>
                ';


            }
        }
        $tmp .= '
        </select>
        ';
        return $tmp;

    }

    function FormatFormValue($text) {
        
        $text = stripslashes($text);
        $text = htmlentities($text);

        return $text;
    }

    function FormatJSValue($text) {
        
        $subst = array("'" => "\\'",
                        '"' => '&quot;',
                        "\r\n" => '\\n',
                        "\n" => '\\n');
        return (strtr($text, $subst));
    }


    function IsValueInOptions($value, $options) {
        
        $tmp = false;
        foreach ($options as $option) {
            if (strtolower($option[0]) == strtolower($value)) {
                $tmp = true;
                break;
            }
        }
    
        return $tmp;
    }
    function FindOptionName($value, $options) {
        
        $tmp = false;
        foreach ($options as $option) {
             if (strtolower($option[0]) == strtolower($value)) {
                $tmp = $option[1];
                break;
            }
        }
    
        return $tmp;
    }
    function FindOptionValue($name, $options) {
        
        $tmp = false;
        $Lname = strtolower($name);
        foreach ($options as $option) {
            if (strtolower($option[1]) == $Lname) {
                $tmp = $option[0];
                break;
            }
        }
    
        return $tmp;
    }

    function FormatStatus($text) {

        $formatList = array(
            ORDER_STATUS_OPEN           => 'negative',
            ORDER_STATUS_ACKNOWLEDGED   => 'positive',
            ORDER_STATUS_SHIPPED        => 'positive',
            ORDER_STATUS_DELETED        => 'negative',

            ITEM_STATUS_OPEN            => 'negative',
            ITEM_STATUS_ALLOCATED       => 'positive',
            ITEM_STATUS_RESERVED        => 'positive',
            ITEM_STATUS_PICKED          => 'positive',
            ITEM_STATUS_SHIPPED         => 'positive',
            ITEM_STATUS_DELETED         => 'negative',

            'PENDING'   => 'negative',
            'APPROVED'  => 'positive',
            'NA'        => ''
        );
        
        $uppercase = strtoupper($text);
        return '<span class="' . $formatList[$uppercase] . '">' . $text . '</span>';
    }
}

?>