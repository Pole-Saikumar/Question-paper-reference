
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName ="qfile";

$conn = mysqli_connect($hostname,$username,$password, $databaseName);

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$message = mysqli_real_escape_string($conn,$_POST['message']);


$sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
 $sc=mysqli_query($conn,$sql);

                if($sc){
                include 'index.html'; 
                 echo '<script>alert("Thanks for contact, we will reach you soon")</script>';  
                }
                else{
                         echo '<script>alert("cannot send the message")</script>';
                }
	


				
?>


<!-- // $dir= "uploads/";
// if(is_dir($dir)){
// 	if($dh=opendir($dir)){
// 		while(($file=readdir($dh))!== false){
// 			echo $file;
// 		}
// 		closedir($dh);
// 	}
// }

echo '<img src="data:image/jpg;base64,'. base64_encode($row['file']).'"/>';// for image retrieval

 


 if ($us && $pd)
 {

    session_start();
    $_SESSION['username'] = $row;

    if($row== $us && $row1==$pd)
	{    	
	include 'upload.html';
	}

	 else 
	 {
	      	include 'login.html';
	    	 echo '<script>alert("invalid username or password")</script>';
	 }
}
else
{
	include 'login.html';
	echo '<script>alert("please fill username or password")</script>';
}