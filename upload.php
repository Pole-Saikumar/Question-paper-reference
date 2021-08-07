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
					<a href="index.html" class="logo"><h2>Q-file</h2></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="View.php">View</a>
						<a href="login.html">Upload</a>
						<a href="logout.php">logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Upload your Question paper</h2>
						<p>Attach once and use it over and over</p>
					</header>
				</div>
			</section>

								<form action="upload_insrt.php" method="post" enctype="multipart/form-data">
													<!-- enctype="multipart/form-data" -->
										 <div class="align">
										 	<label>Year</label>
										   <div class="6u$ 12u$(xsmall)">
												<input type="text" placeholder="year" name="year">
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
										 <label>Subject Code</label>								
											<div class="6u$ 12u$(xsmall)">
												<input type="text" placeholder="Subject" name="subject">
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
							
										
											<label class="align">upload file here:</label><input class="align" type="file" accept="application/pdf" name="file"  >
											<lable><b><strong>Note :</strong> Please use subject code as file name</b></lable>

										<div class="align">
											<div class="6u$ 12u$(xsmall)" >
												<label>Any Reviews</label><textarea name="review" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
									
									
											<div class="align1"><button  type="submit"> submit</button></div>
									
										
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