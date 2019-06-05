<?php 
session_start();
error_reporting(0);

//validate if there is a session open
if(!isset($_SESSION['user']))
{
   header("Location:/");
   exit;
}

if(!isset($_SESSION['subject'])){
	$_SESSION['subject']=1;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/second_header.php');?>
	</head>

	<body class="subpage">
		<!-- Header -->
			<header id="header">
				<div class="inner">
						<a href="/" class="logo-subpage"><img src="./assets/img/icon.png" alt="Pic 01"  style="width:20px; margin: 0 10px; "/>The Nest Of Algebry</a>
					<nav id="nav">
						<a href="#" id="perfil">Perfil</a>
						<a href="/includes/logout.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>	
			<div id="throbber" style="display:none; min-height:120px;"></div>
			<div id="noty-holder"></div>
			<div id="wrapper">
			<!-- Navigation -->
				<nav>
					<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
					<div class="collapse navbar-collapse navbar-ex1-collapse ">
						<ul class="nav navbar-nav side-nav">
							<li>
								<a href="#" data-toggle="collapse" data-target="#submenu-1" class="menu-link" id="subject1">Tema 1. Expresión algebraica.<i class="fa fa-fw fa-angle-down pull-right"></i></a>
								<ul id="submenu-1" class="collapse">
									<li><a href="#" id="m1t1"><i class="fa fa-angle-double-right"></i>1.1 Notación algebraica.</a></li>
									<li><a href="#" id="m1t2" ><i class="fa fa-angle-double-right"></i>1.2  Representación algebraica de expresiones en lenguaje común.</a></li>
									<li><a href="#" id="m1t3"><i class="fa fa-angle-double-right"></i>1.3 Interpretación de expresiones algebraicas.</a></li>
									<li><a href="#" id="m1t4"><i class="fa fa-angle-double-right"></i>1.4 Evaluación númerica de expresiones algebraicas.</a></li>
									<li><a href="#" id="m1E"><i class="fa fa-angle-double-right"></i>Exámen</a></li>
								</ul>
							</li>
							<li>
								<a href="#" data-toggle="collapse" data-target="#submenu-2" class="menu-link" id="subject2">Tema 2. Operaciones fundamentales.<i class="fa fa-fw fa-angle-down pull-right"></i></a>
								<ul id="submenu-2" class="collapse">
									<li><a href="#" id="m2t1"><i class="fa fa-angle-double-right"></i>2.1 Suma, resta, multiplicación y división.</a></li>
									<li><a href="#" id="m2t2"><i class="fa fa-angle-double-right"></i>2.2 Leyes de los exponentes y radicales.</a></li>
									<li><a href="#" id="m2t3"><i class="fa fa-angle-double-right"></i>2.3 Productos notables.</a></li>
									<li><a href="#" id="m2t4"><i class="fa fa-angle-double-right"></i>2.4 Factorización.</a></li>
									<li><a href="#" id="m2E"><i class="fa fa-angle-double-right"></i>Exámen</a></li>
								</ul>
							</li>
							<li>
								<a href="#" data-toggle="collapse" data-target="#submenu-2" class="menu-link" id="subject3">Tema 3. Ecuaciones lineales.<i class="fa fa-fw fa-angle-down pull-right"></i></a>
								<ul id="submenu-3" class="collapse">
									<li><a href="#" id="m3t1"><i class="fa fa-angle-double-right"></i>3.1 Con una incógnita.</a></li>
									<li><a href="#" id="m3t2"><i class="fa fa-angle-double-right"></i>3.2  Sistema de ecuaciones 2x2.</a></li>
									<li><a href="#" id="m3t3"><i class="fa fa-angle-double-right"></i>3.3 Sistema de ecuaciones 3x3.</a></li>
									<li><a href="#" id="m3E"><i class="fa fa-angle-double-right"></i>Exámen</a></li>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
			<!-- Seccion de preguntas -->
			<section id="question-section">
					<div class="inner">
						<iframe id="main-section"
						title="Inline Frame Example"
						frameborder="0" 
						style="overflow:hidden;width:100%"
						src="./templates/blank.html" onload="this.width=screen.width;this.height=screen.height;">
						</iframe>
					</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<?php 
			if($SESSION['subject']<3){
				$SESSION['subject']++;  
			}else{
				$SESSION['subject']=1;  
			}
			if($_SESSION['subject']==1){
				echo '<script language="javascript">
					//
					$("#subject2").addClass("isDisabled");
					$("#subject3").addClass("isDisabled");
					$("#submenu-1").collapse("toggle");
					$("#subject1").addClass("active-menu");
					$("#subject2").removeClass("active-menu");
					$("#subject3").removeClass("active-menu");
					$("#m1t1").addClass("active-submenu");
					$("#m2t1").removeClass("active-submenu");
					$("m3t1").removeClass("active-submenu");
					</script>';
			}
			
			if($_SESSION['subject']==2){
				echo '<script language="javascript">
					$("#subject1").addClass("isDisabled");
					$("#subject3").addClass("isDisabled");
					//Redirect if test1 completed
					document.getElementById("main-section").src ="../templates/modulo1tema2.html";
					$("#submenu-2").collapse("toggle");
					$("#subject2").addClass("active-menu");
					$("#subject1").removeClass("active-menu");
					$("#subject3").removeClass("active-menu");
					$("#m2t1").addClass("active-submenu");
					$("#m1t1").removeClass("active-submenu");
					$("m3t1").removeClass("active-submenu");
					</script>';
			}

			if($_SESSION['subject']==3){
				echo '<script language="javascript">
					$("#subject1").addClass("isDisabled");
					$("#subject2").addClass("isDisabled");
					document.getElementById("main-section").src ="../templates/modulo1tema3.html";
					$("#submenu-3").collapse("toggle");
					$("#subject3").addClass("active-menu");
					$("#subject1").removeClass("active-menu");
					$("#subject2").removeClass("active-menu");
					$("#m3t1").addClass("active-submenu");
					$("#m1t1").removeClass("active-submenu");
					$("#m2t1").removeClass("active-submenu");
					</script>';
			}
			?>
	</body>
</html>