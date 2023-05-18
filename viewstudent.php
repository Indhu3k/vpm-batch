<?php 
include "database.php";
$sql = "SELECT * FROM  boys INNER JOIN ON boys.id=girls.id ";
$result = $conn->query($sql);
?>
<div class="container">
        <h2>USER VIEW</h2>
     
<table class="table table-striped table-bordered">
    <thead class="bg-primary text-center text-white">
        <tr>
        <th >ID</th>
        <th> Name</th>
        <th>Email</th>
        <th>Phone</th>
         
    </tr>
    </thead>
    <tbody class="text-center"> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                   
                    </tr>                       
        <?php       }

            }
        ?>                
    </tbody>
</table>
    </div> 