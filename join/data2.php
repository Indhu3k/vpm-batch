<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "table";
  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql  = "INSERT INTO student_mark VALUES (7,'jana',98,99);";

if ($conn->multi_query($sql) === TRUE) {
  echo "data stored successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$conn->close();
?>