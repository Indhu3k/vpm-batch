<?php 

function unique_names(array $array1, array $array2)
{
    return array_unique(array_merge($array1, $array2));
}
  array([$array1='Raja','Sundar','Maha']);
  array([$array2='Raja','Mohan','Rajes']);
  echo "$array1";
?>
 