<?php


session_start();

echo "<h1> Welcome   ".$_SESSION['username']."</h1>";
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    body{
        background-image: url(background2.jpg);
    }
    h1{
        text-align: center;
        margin-top: 100px;
    }
    button{
        margin-top: 50px;
        margin-left: 50%;
        padding:10px;
      border-radius: 50%;
      background-color: blue;
      color: white;
      height: 70px;
      width: 90px;
    }
    button a{
        color: white;
        font-size: medium;
    }
</style>
<body>
    <h1>Thanks for login</h1>

    <button><a href="logout.php">Logout</a></button>
    
</body>
</html>