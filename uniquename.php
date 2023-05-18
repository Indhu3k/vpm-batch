<?php

$array1=array('raja','sundar','maha');
$array2=array('raja','mohan','rajesh');
$merge=array_merge($array1,$array2);
$uniquename=array_unique($merge);
print_r($merge);

?>