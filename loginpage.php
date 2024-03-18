<?php


include("db.php");

if(isset($_POST["submit"])){
    $user=$_POST['username'];
    $password=$_POST['password'];

    $read="SELECT * FROM user WHERE username='$user'";

    $sql_query=mysqli_query($conn,$read);

    if(mysqli_num_rows($sql_query)>0){
        $row=mysqli_fetch_assoc($sql_query);
        $hash=$row["password"];

        if($password==$hash){
            session_start();
            $_SESSION['username']=$row['username'];
            header('Location: welcome.php')
            ?>
            <script>alert('Login')</script>
            <?php

        }
    } 

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family:"Poppins",sans-serif ;
    } 
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        /* background-color: seagreen; */
        /* background-image: url(background3.jpg); */
    }
    .container{
        width: 420px;
        height: 300px;
        background: green;
        color: #fff; 
        border-radius: 20px;  
        box-shadow: 10px 10px blue;
    }
    .container h1{
        font-size: 36px;
        text-align: center;
        margin-top: 15px;
        color: black;
    }
    .container .input-box{
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }
    .input-box input{
        width: 95%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid white;
        border-radius: 40px;
        font-size: 20px;
        color: #fff;
        margin: 10px;
        padding: 20px;
        
      
    }
    .input-box input::placeholder{
        color:#fff
    
    }
    .input-box i{
        position: absolute;
        transform: translate(-280%);
        font-size: 20px; 
        margin-top: 20px;
        margin-left: -340px;
    }
 
.container button{
   margin-top: 16%;
   padding: 10px;
   font-size: 25px;
  margin-left: 120px;
  width: 200px;
  background-color: greenyellow;
  color: black;
  border-radius: 15px;
 }
 .container button:hover{
    cursor: pointer;
    /* background-color: darkgreen; */
    background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
 }
</style>

<body>
   <div class="container" method="post">
   <form action="" method='POST'>
        <h1>Login Form</h1>
        <div class="input-box">
            <form>

                <input type="text" placeholder="Username"
                required name="username"> 
                <!-- <i class='bx bxs-user'></i> -->
                <br>
                <input type="password" placeholder="password"
                required name="password">
                <!-- <i class='bx bxs-lock'></i> -->
                
                <button type="submit" class="btn" name="submit">Login</button>
            </form>
            
        </div>
        

        
        
    
   
        
   </div>
</body>


</html>