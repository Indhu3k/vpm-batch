<?php
$sql1 = "SELECT  * from  INNER JOIN emp on student_address.sid=student_marks.sid";
$result1 = $conn->query($sql1);

while($row = mysqli_fetch_array($result1)){
    echo  $row['sid'],  $row['name'] , $row['place'] ;
    echo "<br>";
      
}
?>