<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

//creates a connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//checks test2 db is connected to php 
if(!$conn) {
    die("connection faild :" . mysqli_connect_error);   
}
else {
    echo "connected successfully";
}
?>