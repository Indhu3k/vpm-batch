<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "newdb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO emp VALUES (1,'antony ','cehnnai''50000');";
$sql .= "INSERT INTO emp VALUES (2,'bobby','chennai''15000');";
$sql .= "INSERT INTO emp VALUES (3,'ismail','chennai''25000');";
$sql .= "INSERT INTO emp VALUES (4,'rohith','bangalore''35000');";
$sql .= "INSERT INTO emp VALUES (5,'gnanesh','chennai''45000');";

if ($conn->multi_query($sql) === TRUE) {
echo "data stored successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
