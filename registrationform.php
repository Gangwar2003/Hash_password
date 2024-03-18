<?php
//  process for encrypting the password
// $password= "Rahul";
// echo password_hash($password, PASSWORD_DEFAULT);
?>

<?php
// process for checking the password is correct
// $password= '$2y$10$1dTqGVSP4dSgcTWD5sfqZuuDlMjHW9r1C7x2m0erlrGAtj87uuhmm';
//  echo  password_verify('Rahul', $password);
?>
<?php
include("db.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $password=$_POST["password"];


//     if(mysqli_num_rows(mysqli_query($conn,"select * from user where username='$username' "))> 0){
//    echo"Yes";
// }else{
//    echo "No";
// }
$sql = "INSERT INTO user( name,  username , password ) values ('$name', '$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Database inserted successfully";
    }
    else{
        echo "Database error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            /* text-align: center; */
            background-image: url(background2.jpg);
        }
        form{
            border: 2px solid black;
            width: 35%;
            height: 300px;
            margin-top: 170px;
            margin-left: 35%;
            background-color: red
            padding-top: 25px;
            padding-left: 40px;
            border-radius: 10px;
            
        }
        form h1{
            text-align: center;
        }
        form table{
            /* text-align: center;
            justify-content: center;
            text-align: center; */
            margin-top: 20px;
            margin-left: -40px;

        }
        form table tr{
            font-size: 20px;
            height: 40px;
            width: 100px;
            
        }
        form table tr td{
            /* width: 100px; */
            
           
        }
        form table tr td input{
            height: 30px;
            width: 300px;
            border-radius: 10px;
            font-size: 18px;
        }
</style>
<body>
<form method="post">
    <h1>Registration form</h1>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text"  required name="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password"  required name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"  required name="submit"></td>
        </tr>
    </table>

</form>
</body>
</html>