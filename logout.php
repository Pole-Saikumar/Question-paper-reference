<?php

session_start();

if(isset($_SESSION['username']))
{
		session_destroy();
		include 'index.html';
		 echo '<script>alert("successfully logged out")</script>';
		
}

?>