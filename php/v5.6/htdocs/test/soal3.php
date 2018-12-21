<?php
    function validator($test_var = NULL, $arr_pembuka = NULL, $arr_penutup = NULL){
        $var_explode = explode($test_var);
        return $var_explode;
    }

    $arr_pembuka = array('(' , '{', '[');
    $arr_penutup = array(')' , '}', ']');
    $test_var = "{[]()}";

    echo '<pre>';
    print_r(validator($test_var));
    echo '</pre>';
?>