<?php
include 'phpproject_server.php';
echo "PHP_PROJECT_avalability";

$a=$_POST['b1'];
$b=$_POST['b2'];
$sql="SELECT source,destination FROM traindatabase WHERE source='$a' and destination='$b'";

echo "<br>";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        header('location:train reservation.html');
    
}

 else {
    header('location:error.html');
}


?>