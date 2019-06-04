<?php
include 'db_connection.php';
session_start();
$conn = OpenCon();
?>

<!DOCTYPE HTML>
<html>
	<head>
		 <!-- Bootstrap -->

		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


		<!--Custom css-->
		<link rel="stylesheet" href="/assets/css/main.css" />

	</head>
	
	<body class="subpage">
	<!-- Main -->
		<section id="main">
		<div class="inner">
			<header class="align-center">
				<h2><strong><?php echo $_SESSION['user'];?></strong></h2>
				<p><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'];?></p>
			</header>
			<div class="row">
				<div class="user-profile 6u 12u$(small)">
						<img src="../assets/img/user.png" alt="" />
				</div>
				<div class="user-profile 6u 12u$(small)">
					<p>Genero: <?php echo $_SESSION['gender'];?><br>Fecha de nacimiento: <?php echo $_SESSION['birthdate'];?></p>
					<p></p>
					<h2>Progreso</h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70"
						aria-valuemin="0" aria-valuemax="100" style="width:70%">
							<span class="sr-only">70% Complete</span>
						</div>
					</div>
				</div>
			</div>			
		</div>
		</section>
	</body>
</html>