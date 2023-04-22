<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

//create a database connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//check whether connection is successful or not
if (!$conn) {
    die("connection faild :" . mysqli_connect_error());
}
else {
    echo "Successfully connected";
}
?>