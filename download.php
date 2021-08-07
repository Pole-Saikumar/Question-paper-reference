<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName ="qfile";

$conn = mysqli_connect($hostname,$username,$password, $databaseName);

$year = mysqli_real_escape_string($conn,$_POST['year']);
$branch = mysqli_real_escape_string($conn,$_POST['branch']);
$sem = mysqli_real_escape_string($conn,$_POST['sem']);
$subject = mysqli_real_escape_string($conn,$_POST['subject']);
$type = mysqli_real_escape_string($conn,$_POST['type']);

if(isset($_POST['submit']))
{
$sql = "SELECT file from uploads where year='$year' and branch='$branch' and sem='$sem' and subject='$subject' and type='$type'";

$result = mysqli_query($conn,$sql);

	while($row = $result->fetch_assoc())
	{
		if($row)
		{
			$filepath = 'uploads/'.$row['file'];
					
				if(file_exists($filepath))
				{
					header('Content-Type: application/pdf');
					header('Content-Description: File Transfer');
					header('Content-Disposition: attachment; filename'.$row['file']);
					header('Expires: 0');
			        header('Cache-Control: must-revalidate');
				    header('Pragma:public');
				    header('Content-Type-Encoding:binary');
				    readfile($filepath);
				     exit;
				}
				else
				{
					echo "file does not exists";
				}
		}
     }
}

if(isset($_POST['reviews']))
{
	$sql = "SELECT review from uploads where year='$year' and branch='$branch' and sem='$sem' and subject='$subject' and type='$type'";

	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($result)){

		echo "Review::";

		echo $row[0];

		include 'View.php';
	}
}
else
{
	include 'View.php';
	echo '<script>alert("Please select all the fileds")</script>';
}

?>


