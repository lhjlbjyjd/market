<?php

function get_products()
{
  global $link;
  
  $sql = "SELECT * FROM `product` ";
  
  return mysqli_query($link,$sql);
}

function get_price($prices){
    $array = json_decode($prices, true);
    if(count($array) > 1) {
        $max = 0;
        $min = 200000000;
        for($i = 0; $i < count($array); $i++){
            if($array[$i]['Price'] > $max)
                $max = $array[$i];
            if($array[$i]['Price'] < $min)
                $min = $array[$i];
        }

        return $min." - ".$max." ₴";
    }else{
       return $array[0]['Price']." ₴";
    }
}

?>

