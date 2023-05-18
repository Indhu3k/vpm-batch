<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>customer Documents</title>
</head>
<body>
    <form action="CusData" method="POST">
        @csrf
        <label for="name">Name:<input type="text" name="name" placeholder="enter your name"></label><br><br>
        <label for="email">Email:<input type="email" name="email" placeholder="example@gmail.com"></label><br><br>
        <label for="password">Password:<input type="password" name="password"></label><br><br>
        <label for="ipaddress">IpAddress:<input type="text" name="ipaddress"></label><br><br>
        <label for="feedback">Feedback:<input type="text" name="feedback"></label><br><br>
        <label for="submit"><input type="submit" name="submit"></label>

    </form>
</body>
</html>