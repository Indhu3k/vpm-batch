<?php 
$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname="marks";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

  $query  = " SELECT  names,students FROM marks names.id WHERE students.id = names.id";
  
  $result = mysqli_query($conn, $query) or die("error".mysqli_error($conn));

      
?>    


