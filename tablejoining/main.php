<?php
    $dbconnection = new mysqli('localhost','root','','joindb');
    $sql = "select * from frist ";
    $result = $dbconnection->query($sql);
    $table=mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title>main</title>
    </head>
    <body>
        <div>
            <table border=2>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Place</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php 
                      foreach($table as $value){
                              


                       echo" 
                                <td>$value</td>
                               

                       ";
                      }
                    
                    ?>
                     </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>