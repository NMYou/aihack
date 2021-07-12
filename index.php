<?php 
require_once ('connection.php');

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitdon'])){

	$emailid = $_POST['email'];
	$passw = $_POST['psw'];
	$confpassw = $_POST['cpsw'];
	$sql = "SELECT emailid, passw, confpassw
    FROM donorsignin
    WHERE  emailid = '$emailid' AND  confpassw = '$confpassw'";
	// $sql = "SELECT * from `donorsignin` WHERE  emailid = '$emailid', passw = '$passw' AND  confpassw = '$confpassw'";

	$result = mysqli_query($conn, $sql);
	if($passw == $confpassw ){
	if(mysqli_num_rows($result) == 1){

		echo '<script>alert("Successfully Login")</script>';
		header("Location:Donordashboard.php");
	}
	else
	{	
	  echo '<script>alert("Entered Wrong details")</script>';
	}
	}
	else
	  {	
		echo '<script>alert("Entered Wrong details")</script>';
	  }

  }

  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitrec'])){

	$emailid = $_POST['email'];
	$passw = $_POST['psw'];
	$confpassw = $_POST['cpsw'];

  
	$sql = "SELECT emailid, passw, confpassw
    FROM receiversignin
    WHERE  emailid = '$emailid' AND  confpassw = '$confpassw'";
	$result = mysqli_query($conn, $sql);
	if($passw == $confpassw ){
	if(mysqli_num_rows($result) == 1){

		echo '<script>alert("Successfully Login")</script>';
		header("Location:Receiverdashboard.php");
	}
	else
	{	
	  echo '<script>alert("Entered Wrong details")</script>';
	}
	}
	else
	  {	
		echo '<script>alert("Entered Wrong details")</script>';
	  }
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AI HACK ACCENTURE - TEAM DOT</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>

<body>
	<nav class="navbar">
		<div class="max-width">
			<ul class="menu">
				<div class="w3-container w3-animate-right">
					<li><a href="#home" class="menu-btn">Home</a></li>
					<li><a href="#about" class="menu-btn">About</a></li>
					<li><a href="#services" class="menu-btn">Services</a></li>
					<li><a href="#skills" class="menu-btn">Statistics</a></li>
					<li><a href="#chatbot" class="menu-btn">Chat Bot</a></li>
				</div>
			</ul>
		</div>
	</nav>

	<!-- home section start -->
	<section class="home" id="home" style="background-image: url('img/BGimage.png');">
		<div class="max-width">
			<div class="home-content">
				
				<div class="w3-container w3-animate-left">
				<div class="aligncenter">
				<img src="img/DOTXHACK.png" alt="flowchart" width="850px" height="400px">
				</div>
					<a href="#about">Know More</a>
				</div>

			</div>
		</div>
	</section>
	<!-- about section start -->
	<section class="about" id="about">
		<div class="max-width">
			<h2 class="title">Aim</h2>
			<div class="about-content">
				<div class="column right">
					<div class="text">Flow for Donors</div>
					<img src="img/donor.png" alt="flowchart" width="300px" height="300px">
					<br>
					<!-- <p></p> -->
					<button class="open-button" onclick="openFormdonor()">Sign-In as Donor</button>
					

					<div class="form-popup" id="myFormdonor">
					<form method="post" action="index.php" class="form-container">
						   
							<label for=""><h2>Donors Form<h2></label>
							<label for="email"><h3>Email<h3></label>
							<input type="text" placeholder="Enter Email" name="email" required>

							<label for="psw"><h3>Password<h3></label>
							<input type="password" placeholder="Enter Password" name="psw" required>

							<label for="cpsw"><h3>Confirm Password</h3></label>
							<input type="password" placeholder="Confirm Password" name="cpsw" required>

							<button type="submit"  name="submitdon" class="btn">Sign In</button>
							<br>
							<button type="button" class="btn cancel" onclick="closeFormdonor()">Close</button>
						</form>
					</div>

				</div>
				<div class="column right">
					<div class="text">Flow for Receivers</div>
					<img src="img/receiver.png" alt="flowchart" width="300px" height="300px">
					<p></p>
					<button class="open-button" onclick="openFormreceiver()">Sign-In as Receiver</button>

					<div class="form-popup" id="myFormreceiver">
					<form method="post" action="index.php" class="form-container">
						   
							<label for=""><h2>Receivers Form<h2></label>
							<label for="email"><h3>Email</h3></label>
							<input type="text" placeholder="Enter Email" name="email" required>

							<label for="psw"><h3>Password</h3></label>
							<input type="password" placeholder="Enter Password" name="psw" required>

							<label for="cpsw"><h3>Confirm Password</h3></label>
							<input type="password" placeholder="Enter Password" name="cpsw" required>

							<button type="submit" name="submitrec" class="btn">Sign In</button>
							<br>
							<button type="button" class="btn cancel" onclick="closeFormreceiver()">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- services section start -->
	<section class="services" id="services">
		<div class="max-width">
			<h2 class="title">Services</h2>
			<div class="serv-content">
				<div class="card">
					<div class="box">
						<i class="fas fa-donate"></i>
						<div class="text">Donor Section</div>
						<p> Get access to the analyzed data of the poverty level of the regions/communities to donate funds as well as earn rewards for the good cause.
</p>
					</div>
				</div>
				<div class="card">
					<div class="box">
						<i class="fas fa-chart-line"></i>
						<div class="text">Receiver Section</div>
						<p>The receivers can monetarily raise funds for their ventures by creating their respective advertisements also using the feature of image to video converter for their advertisement.
</p>
					</div>
				</div>
				<div class="card">
					<div class="box">
						<i class="fas fa-code"></i>
						<div class="text">Project Idea Section</div>
						<p>Dashboard consists of multiple projects belonging to various domains such as agriculture poultry etc. Feel free to communicate with the chat bot for any queries .
</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- skills section start -->
	<section class="skills" id="skills">
		<div class="max-width">
			<h2 class="title">Daily Statistics</h2>

			<div class="row">
				<div class="column">
					<i class="fa fa-donate" aria-hidden="true"></i>
					<div class="counting1" data-count="250">255</div>
					<h5>Donations Received</h5>
				</div>
				<div class="column">
					<i class="fa fa-user" aria-hidden="true"></i>
					<div class="counting2" data-count="75">142</div>
					<h5>Total Receivers</h5>
				</div>
				<div class="column">
					<i class="fa fa-code" aria-hidden="true"></i>
					<div class="counting3" data-count="900000">63</div>
					<h5>Business/Project Ideas</h5>
				</div>
			</div>
			<!-- end container -->

	</section>
	<section class="chatbot" id="chatbot">

	<div class="chatbox">
		<div style="text-align: center;" class="chattop">
			<h1><b>Dot Customer ChatBot</b></h1>
		</div>
		<div class="chatmid">
			<div class="chatchat">
				<h2>Type Your Query Below</h2>
				<p id="chatLog">How May I Help you?</p>
			</div>
		</div>
		<div class="chatinput">
			<input type="text" id="userBox"onkeydown="if(event.keyCode == 13){ talk() }"placeholder="Type a Message...">
		</div>
	</div>
	</section>
	<script src="js/script.js"></script>
	<script src="js/Chat.js"></script>
</body>

</html>