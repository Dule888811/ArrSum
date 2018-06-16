<?php
require_once "core/init.php";

 class ArrSort
{

    public static function sortArr()
    {


        for ($k = 1; $k < sizeof( $_SESSION['arr1']) * sizeof( $_SESSION['arr2']) - 1; $k++) {
            for ($l = 0; $l < $k; $l++) {
                if (Collection::arr1[$k] < Collection::sumiranje[$l]) {
                    $temp = Collection::sumiranje[$k];
                    Collection::sumiranje[$k] = Collection::sumiranje[$l];
                    Collection::sumiranje[$l] = $temp;
                    $temp =  Collection::prvi[$k];
                    Collection::prvi[$k] =  Collection::prvi[$l];
                    Collection::prvi[$l] = $temp;
                    $temp = Collection::drugi[$k];
                    Collection::drugi[$k] = Collection::drugi[$l];
                    Collection::drugi[$l] = $temp;
                }
            }

        }
    }
}
?>