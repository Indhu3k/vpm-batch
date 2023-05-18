<html>
<body>
<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "table";
  

$conn = new mysqli($servername, $username, $password, $dbname);
echo "inner join on student_address: ";
echo "<br>";
$sql = "SELECT  * from student_address INNER JOIN student_mark on student_address.sid=student_mark.sid";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
    echo " STUDENT-ID : ". $row['sid'], " ----- NAME : ". $row['sname'] ," ----- ADDRESS : ". $row['saddress'] ;
    echo "<br>";
      
}
  
echo "<br>";
echo "inner join on student_mark: ";
echo "<br>";

$sql1 = "SELECT  * from student_mark INNER JOIN student_address on student_address.sid=student_mark.sid";
$result1 = $conn->query($sql1);

while($row = mysqli_fetch_array($result1)){
    echo " STUDENT-ID : ". $row['sid'],"----NAME : ".$row['sname'] , " ----- SUBJECT 1 : ". $row['ssubject1'] ," ----- SUBJECT 2 : ". $row['ssubject2'] ;
    echo "<br>";
      
}
  
  

  
$conn->close();
?>
</body>
</html>