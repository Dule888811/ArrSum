<?php
spl_autoload_register(function($className){
	require_once "classes/{$className}.class.php";
});
//$arr1=array(0,2,4,7,9);
//=array(11,16,18);
//$coll = new Collection($arr1,$arr2);


?>