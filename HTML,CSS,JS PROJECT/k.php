<?php
//server name is always localhost
$servername = "localhost";    //$ is used for variable
$username = "root";
$password = "";
$dbname = "siva";

// Create connection
$conn = mysqli_connect($sname, $username, $password,$dbname);    //$conn This is a varible with name conn

// This is to Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
echo "Connected successfully";
}
?>