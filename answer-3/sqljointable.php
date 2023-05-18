<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Answer-3</title>
</head>
<body class="d-flex vh-100 align-items-center justidy-content-center">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "answer3";

                    $connection = new mysqli($servername, $username, $password, $database);

                    if($connection->connect_error){
                        die("Connection failed: ". $connection->connect_error);
                    }

                    $sql = "SELECT * FROM table1 INNER JOIN table2 WHERE table1_id = table2_id";

                    $result = $connection->query($sql);

                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[table1_id]</td>
                            <td>$row[firstname]</td>
                            <td>$row[lastname]</td>
                        </tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
        
    </div>







  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>



