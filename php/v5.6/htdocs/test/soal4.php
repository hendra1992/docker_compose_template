<?php
    function check($text = NULL){
        $upcase = array('C','I','V','L');
        $arr_text = explode($text, '');
        foreach ($arr_text as $i => $item) {
            if(in_array($i, $upcase)){
                $upcase_found = true;
            } else {
                $upcase_found = false;
            }
        }
        return (($upcase_found) ? 'FALSE' : 'TRUE');
    }

    $text = 'livci';
    echo '<pre>';
    print_r(check($text));
    echo '</pre>';
?>