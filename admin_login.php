<?php
include("db.php");

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    if ($user == 'Rahul123' && $password == '1234') {
        session_start();
        $_SESSION['admin_login.php'] = "admin";
        header('location: logout.php');


    } else {
        echo 'database error';
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        background-color: darkorange;

    }

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        /* text-align: center; */
    }

    .container {
        border: 2px solid black;
        height: 300px;
        width: 400px;
        background-color: lightblue;
        border-radius: 15px;
        background-color: darkgrey;
        /* background-image: url(bck4.jpg); */
        box-shadow: 1px 1px 10px black;
    }

    .container h1 {
        text-align: center;
        color: blue;
        padding-top: 30px;
    }

    .container .form-box {
        text-align: center;
        padding-top: 30px;
    }

    .container .form-box {
        /* height: 100px; */
        /* width: 100%; */
    }

    .container .form-box form input {
        width: 80%;
        height: 30px;
        border-radius: 10px;
        padding: 20px;
        margin: 10px;
    }

    .container .form-box button {
        height: 30px;
        width: 70px;
        margin: 20px;
        border-radius: 50%;
        background: black;


    }

    .container .form-box button a {
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <div class="container">
        <h1>Admin Login</h1>
        <div class="form-box">
            <form method="post">
                <input type="text" placeholder="Enter your email" name="username">
                <br>
                <input type="password" placeholder="Password" name="password">
                <button type="submit" name="login"><a href="#">Login</a></button>
            </form>

        </div>
    </div>

</body>

</html>