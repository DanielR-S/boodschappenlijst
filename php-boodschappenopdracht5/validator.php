<?php


class validator 
{

     public static function string($value, $min = 1, $max = INF) {
      $value = trim($value);

       return strlen($value) >= $min && strlen($value) <= $max;
     } 

     public static function integer($value, $min = 1, $minS = 1, $maxS = 4) {
        $value = trim($value);

        return $value >= $min && strlen($value) >= $minS && strlen($value) <= $maxS  ;
     }
}