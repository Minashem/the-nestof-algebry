<?php
include 'db_connection.php';
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['login_type']) )
{
   header("Location:/");
   exit;
}

$conn = OpenCon();

$user = $_SESSION['user'] != null ? $_SESSION['user'] : "";

    	$query = "SELECT examGrade1, examGrade2, examGrade3  FROM  userhistory WHERE  username = '$user'";

    	$result2 = $conn->query($query) or die($conn->error);
    	$infoUser = mysqli_fetch_assoc($result2);

    	$examGrade1 = $infoUser['examGrade1'] != null ? $infoUser['examGrade1'] : "";
    	$examGrade2 = $infoUser['examGrade2'] != null ? $infoUser['examGrade2'] : "";
		$examGrade3 = $infoUser['examGrade3'] != null ? $infoUser['examGrade3'] : "";

    	$progreso = 0;
    	if ($examGrade1 != "") {
    		$progreso = $progreso + 35;
    	}
    	if ($examGrade2 != "" && $progreso > 0) {
    		$progreso = $progreso + 35;
    	}
    	if ($examGrade3 != "" && $progreso > 35) {
    		$progreso = 100;
    	}
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
							<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $progreso;?>"
							aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progreso;?>%">
								<span class="sr-only"><?php echo $progreso;?> Complete</span>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</section>
	</body>
</html>