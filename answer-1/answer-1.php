<?php 
    $name1 = ['Raja','Sundar','Maha'];
    $name2 = ['Raja','Mohan','Rajesh'];

    $mergedArr = array_merge($name1, $name2);
    $uniqueArr = array_unique($mergedArr);
    print_r($uniqueArr);  
?>