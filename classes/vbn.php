<?php
class Collection{
    public  $sumiranje=[];
    public  $prvi=[];
    public $drugi=[];
    public $arr1=[];
    public $arr2=[];
    public  function __construct($arr1,$arr2){
        for($i=0;$i<sizeof($arr1);$i++){

            for($j=0;$j<sizeof($arr2);$j++){

                $this->sumiranje[$i*sizeof($arr1)+$j]=$arr1[$i]+$arr2[$j] ;
                $this->prvi[$i*sizeof($arr1)+$j]=$i;
                $this->drugi[$i*sizeof($arr1)+$j]=$j;
            }
        }

    }
