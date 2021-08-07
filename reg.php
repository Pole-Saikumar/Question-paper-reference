<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName ="qfile";

$conn = mysqli_connect($hostname,$username,$password, $databaseName);

$id= mysqli_real_escape_string($conn,$_POST['id']);
$name= mysqli_real_escape_string($conn,$_POST['name']);
$branch= mysqli_real_escape_string($conn,$_POST['branch']);
$un = mysqli_real_escape_string($conn,$_POST['username']);
$pd = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "INSERT INTO `users`(`id`, `name`, `branch`, `username`, `password`) VALUES ('$id','$name','$branch','$un','$pd')";
$sc=mysqli_query($conn,$sql);

                if($sc){
                 include 'login.html'; 
                 echo '<script>alert("Registration Successful!")</script>';  
                }
                else{
                         echo '<script>alert("cannot connect to server")</script>';
                }
?>
