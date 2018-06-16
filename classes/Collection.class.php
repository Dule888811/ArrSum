<?php

class Collection{
    public static $sumiranje=[];
    public static $prvi=[];
    public static $drugi=[];
    public static $arr1=[];
    public static $arr2=[];
    public function __construct($arr1,$arr2){
        for($i=0;$i<sizeof($arr1);$i++){

            for($j=0;$j<sizeof($arr2);$j++){

                $jsumiranje[$i*sizeof($arr1)+$j]=$arr1[$i]+$arr2[$j] ;
                $prvi[$i*sizeof($arr1)+$j]=$i;
                $drugi[$i*sizeof($arr1)+$j]=$j;
            }
        }




                                                           }

}
?>