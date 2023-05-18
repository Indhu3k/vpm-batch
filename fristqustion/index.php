<?php 
   //Frist Question
   $arr1 = array("Raja","Sundar","Maha");
   $arr2 = array("Raja","Mohan","Rajesh");

   $arr3 = array_merge($arr1,$arr2);
   $arr = array_unique($arr3);
   //print_r(array_unique($arr3))."<br>";
   foreach($arr as $val){
      echo$val."<br>"; //output: Raja,Sundar,Maha,Mohan,Rajesh
   }


   





?>