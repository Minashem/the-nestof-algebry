<?php 
session_start();
var_dump($_SESSION);
?>

<!DOCTYPE HTML>
<html>
	<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');
	
    if(isset($_SESSION['response']) && $_SESSION['response'] == false) { ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#sesionModal').modal('show');
			});
		</script>
    <?php }else{
	} ?> 
    </head>
	
	<body>
		<!-- Header -->
		<header id="header">
			<div class="inner">
				<a href="/" class="logo"><img src="./assets/img/icon.png" alt="Pic 01"  style="width:20px; margin: 0 10px; "/>The Nest Of Algebry</a>
				<div class="left-navigation">
					<a href="index.html">Inicio</a>
					<a href="elements.html">Sobre nosotros</a>
				</div>
				<nav id="nav">
					<a data-target="#sesionModal" data-toggle="modal" id="login" href="#sesionModal">Iniciar sesión</a>
					<a data-target="#sesionModal" data-toggle="modal" id="register" href="#sesionModal">Registrarse</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>
		<div class="page-wrapper">
			<!-- Banner -->
			<section id="banner">
				<h1>La mejor forma de aprender</h1>
				<p>Breve descripción de la pagina.</p>
				<button>Conoce nuestros temas</button>		
			</section>

			<!-- Acerca de- primera seccion -->
			<section id="one" class="wrapper style1 special">
					<div class="inner">
						<div class="flex flex-2">
							<article>
								<div class="image fit">
									<img src="./assets/img/icon.png" alt="Pic 01"  style="width:50%; margin: auto; "/>
								</div>
							</article>
							<article>
								<header>
									<h3>Acerca de The Nest Of Algebry </h3>
								</header>
								<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu.</p>
							</article>
						</div>
					</div>
			</section>

			<!-- Beneficios- segunda seccion -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2>Beneficios</h2>
						<p>Aliquam erat volutpat nam dui </p>
					</header>
					<div class="flex flex-2">
						<article>
							<div class="image fit">
								<img src="./assets/img/mona.png" alt="Pic 01" style="width: 150px;" />
							</div>
							<header>
								<h3>Portabilidad</h3>
							</header>
							<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
						</article>
						<article>
							<div class="image fit">
								<img src="./assets/img/tutorial.png" alt="Pic 02" />
							</div>
							<header>
								<h3>Aprende y practica</h3>
							</header>
							<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
						</article>
					</div>
				</div>
			</section>

			<!-- Temas de algebra -tercera seccion -->
			<section id="three" class="wrapper">
				<div class="inner">
					<div class="title">
						<h1>Temas de algebra</h1>
						<hr>
					</div>
					<div class="flex flex-3">
						<article>
							<header>
								<h3>Polinomios</h3>
							</header>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu.</p>
							<footer>
								<a href="#" class="button special">Aprende más</a>
							</footer>
						</article>
						<article>
							<header>
								<h3>Ecuaciones de primer grado</h3>
							</header>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu.</p>
							<footer>
								<a href="#" class="button special">Aprende más</a>
							</footer>
						</article>
						<article>
							<header>
								<h3>Ecuaciones de segundo grado</h3>
							</header>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu.</p>
							<footer>
								<a href="#" class="button special">Aprende más</a>
							</footer>
						</article>
						<div class="all-themes">
							<a href="#">Todos los temas</a>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; The Nest Of Algebry.2019
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/modal.php');?>
		
		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<?php
			//If there is a session open change "Iniciar sesion" to "Cerrar sesiion" link and logout on click
			 if(isset($_SESSION['user'])){
				echo '<script language="javascript">
						$("#login").attr("id", "logout");
						$("#logout").removeAttr("data-toggle");
						$("#logout").removeAttr("data-target");
						$("#logout").text("Cerrar sesion");
						$("#logout").click(function(){
							window.location.href = "/includes/logout.php";
							console.log("login");
						});
					</script>';
					session_destroy();
			}else if(!isset($_SESSION['user'])){
				echo '<script language="javascript">
						$("#logout").attr("id", "login");
						$("#login").attr("data-target", "#sesionModal");
						$("#login").attr("data-toggle", "modal");
						$("#login").text("Iniciar sesion");
						$("#register-form").hide();
					</script>';
			}	
			
			if(isset($_SESSION['response']) && $_SESSION['response'] == false){
				echo '<script language="javascript">
					$("#log-err").removeClass("hidden");
					</script>';
					session_destroy();
			}
			?>
	</body>
</html>