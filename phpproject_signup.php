<?php
include 'phpproject_server.php';
echo "PHP_PROJECT_SIGNUP";

$a=$_POST['a1'];
$b=$_POST['a2'];
$c=$_POST['a3'];
$d=$_POST['a4'];
$e=$_POST['a5'];
$f=$_POST['a6'];

$sql="INSERT INTO user VALUES('$a',$b,'$c','$d','$e','$f')";

echo "<br>";
$result=mysqli_query($conn,$sql);

if($result)
{
	header('location:Train Avalability.html');
}
else 
{
    header('location:error.html');
}

?>