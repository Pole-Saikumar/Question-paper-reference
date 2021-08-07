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

$sql = "SELECT file from question_papers where year='$year' and branch='$branch' and sem='$sem' and subject='$subject' and type='$type'";

	$result = mysqli_query($conn,$sql);

	while($q=$result->fetch_assoc()){
		$file=base64_decode(stripslashes($q['file']));
		header("content-type: application/pdf");//for pdf file
		header('Content-Disposition: attachment; filename=$file'.basename($q['file']));
		header('Accept-Ranges: bytes');
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
	    header('Cache-Control: must-revalidate');
		header('Pragma:public');
		readfile($file);
		exit;}
?>