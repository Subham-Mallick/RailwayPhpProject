<?php
echo "PHP_PROJECT_SERVER";
$servername = "localhost";
$username = "root";
$password = "";
$database="user database";

//create connection
$conn= new mysqli($servername,$username,$password,$database);

//check connection
if($conn->connect_error) {die("connection failed:".$conn->connect_error);}
echo "database Connection succesfully";


?>