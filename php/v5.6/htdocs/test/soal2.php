<?php
    function print_merge_lists($my_list = NULL, $alisa_list = NULL){
        $arr_result = array();
        foreach ($alisa_list as $i => $alisa_item) {
            $alisa_found = false;
            foreach ($arr_result as $ii => $adata) {
                if($alisa_item == $adata){
                    $alisa_found = true;
                }
            }

            if(!$alisa_found){
                $arr_result[] = $alisa_item;
            }
            
            foreach ($my_list as $j => $my_item) {
                $my_found = false;
                foreach ($arr_result as $jj => $bdata) {
                    if($my_item == $bdata){
                        $my_found = true;
                    }
                }

                if(!$my_found){
                    $arr_result[] = $my_item;
                }
            }
        }

        return $arr_result;
    }  

    $my_array = array(3, 4, 6, 10, 11, 15);
    $alisa_array = array(1, 5, 8, 12, 14, 19);

    echo '<pre>';
    print_r(print_merge_lists($my_array, $alisa_array));
    echo '</pre>';
?>