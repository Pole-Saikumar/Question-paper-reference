<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName ="qfile";

$conn = mysqli_connect($hostname,$username,$password, $databaseName);

$us= mysqli_real_escape_string($conn,$_POST['username']);
$pd = mysqli_real_escape_string($conn,$_POST['password']);

session_start();

$_SESSION['username']= $us;

$sql = "SELECT username,password FROM users WHERE username='$us' AND password='$pd'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	include 'upload.php';
    while($row = $result->fetch_assoc()) {
             //echo "name: " . $row["username"]. " <br> password: " . $row["password"]. "<br>";
                      echo '<a href="upload.php"></a>';
     }
 } else {
      	include 'login.html';
     echo '<script>alert("invalid username or password")</script>';
 }

 $conn->close();

?>


 
