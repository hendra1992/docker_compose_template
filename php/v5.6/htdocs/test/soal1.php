<?php
    function harga_saham_kemarin($membeli = 0, $menjual = 0){
        $arr_saham_kemarin = array(10, 7, 5, 8, 11, 9);
        foreach($arr_saham_kemarin as $i => $nominal){
            if($nominal == $membeli){
                $membeli = $nominal;
            }
            if($nominal == $menjual){
                $menjual = $nominal;
            }
        }

        if(!$membeli)
            $membeli = 0;
        if(!$menjual)
            $menjual = 0;

        $keuntungan_maksimal = $menjual - $membeli;
        return $keuntungan_maksimal;
    }
    echo '<pre>';
    print_r(harga_saham_kemarin(5, 11));
    echo '</pre>';
?>