<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "rahul4";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if ($conn){
    echo "database connected successfully";
}
else{
    echo "database error";
}

?>