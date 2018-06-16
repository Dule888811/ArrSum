<?php
require_once "core/init.php";

 class WhritePairs
{

    public static function whriteResult($s)
    {

        for ($i = 0; $i = $s; $i++){


            echo "[" .  Collection::arr1[Collection::prvi[$i]];
            echo "," .  Collection::arr2[Collection::prvi[$i]] . "]" ;
            if ($i < $s - 1) {
                echo   ",";
            }
        }
    }
}
?>