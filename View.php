<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName ="qfile";

$conn = mysqli_connect($hostname,$username,$password, $databaseName);

$query = "select year from uploads group by year"; 
$result1 = mysqli_query($conn,$query);

$query1 = "select subject from uploads"; 
$result2 = mysqli_query($conn,$query1);

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Q-file</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong><h2>Q-file</h2></strong></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="View.php">View</a>
						<a href="login.html">Upload</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Looking for a reference??</h2>
						<p>get your question paper here </p>
					</header>
				</div>
			</section>

								<form action="download.php" method="post" >
										 <div class="align">
										 	<label>Year</label>	
										   <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="year" id="demo-category">
														<option value="">-select year-</option>
														<?php
														while($row1 = mysqli_fetch_array($result1)):;?>
														<option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
														<?php endwhile;?>
														?>
													</select>
												</div>
											</div>
										</div>
								

									
										<div class="align">
											<label>Branch</label>	
											<div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="branch" id="demo-category">
														<option value="">- select branch -</option>
														<option value="ECE">ECE</option>
														<option value="CSE">CSE</option>
														<option value="CIVIL">CIVIL</option>
														<option value="MECH">MECH</option>
														<option value="EEE">EEE</option>
														<option value="MME">MME</option>
														<option value="CHEM">CHEM</option>
													</select>
												</div>
											</div>
										</div>


										<div class="align">		
											<label>Sem</label>							
											<div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="sem" id="demo-category">
														<option value="">- select sem -</option>
														<option value="sem1">sem-1</option>
														<option value="sem2">sem-2</option>
													</select>
												</div>
											</div>
										</div>

										
										
										<div class="align">
										 	<label>Subject</label>	
										   <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="subject" id="demo-category">
														<option value="">- select subject -</option>
														<?php
														while($row2 = mysqli_fetch_array($result2)):;?>
														<option value="<?php echo $row2[0]; ?>"> <?php echo $row2[0]; ?> </option>
														<?php endwhile;?>
														?>
													</select>
												</div>
											</div>
										</div>
										
										<div class="align">	
										   <label>Paper type</label>									
											<div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="type" id="demo-category">
														<option value="">- select type -</option>
														<option value="Regular">Regular</option>
														<option value="Remedial">Remedial</option>
													</select>
												</div>
											</div>
										</div>
									
									
											<div class="align1"> <button  type="submit" name="submit"> submit</button></div>
											<div class="align4"><button  type="submit" name="reviews"> Click here to see reviews</button></div>
									
										
								</form>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="qp.php" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy;<h4>Qfile<h4>
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>