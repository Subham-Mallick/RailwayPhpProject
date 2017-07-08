<?php
include 'phpproject_server.php';
echo "PHP_PROJECT_SIGNUP";

$a=$_POST['c1'];
$b=$_POST['c2'];
$c=$_POST['c3'];

$sql="SELECT Name,Username,Password FROM user WHERE Name ='$a' and Username ='$b' and Password ='$c'";

echo "<br>";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
	header('location:Train Avalability.html');
}
else 
{
    header('location:error.html');
}

?>