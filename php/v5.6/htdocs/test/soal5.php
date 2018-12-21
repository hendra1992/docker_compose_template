<?php
    function sikusiku($input = NULL){
        $arr_number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
        $space = ' ';
        for ( $i = $input ; $i >= 0 ; $i-- ) {
            for ( $j = 0 ; $j <= $input ; $j++ ) { 
                echo $space;
            } 
            if($i == $input){
                echo $i;
                echo '<br/>';
            } else {
                echo $i;
                echo '<br/>';
            }
        }
    }

    $test_value = 8;
    echo '<pre>'; print_r(sikusiku($test_value)); echo '</pre>';
?>