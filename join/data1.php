<?php




$servername = "localhost";

$username = "root";

$password = "";

$dbname = "table";
  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_address VALUES (3,'thiru','cud')";


if ($conn->multi_query($sql) === TRUE) {
  echo "data stored successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$conn->close();




?>