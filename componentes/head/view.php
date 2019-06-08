<div class="container-fluid hidden-xs " id="top">
	<div class="container">
		<i class="fas fa-phone"></i> 942 62 63 26
		<i class="fas fa-envelope"></i> filmaclub.project@gmail.com

		<!-- sociales -->
		<ul class="list-unstyled iconos-social">
			<li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
			<li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
			<li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
			<li><a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="https://www.github.com"><i class="fab fa-github"></i></a></li>
		</ul>

	</div>
</div>
<!--Fin Affix-->
<!--Inicio NavBar-->
<!-- Barra Menu -->
<nav class="navbar navba" id="barra" data-spy="affix" data-offset-top="37">
	<div class="container">

		<div class="col-md-4 navbar-header">

			<!-- logo -->
			<a id="titulo-pagina" href="index.php">
				<img _class="col-md-6" src="./img/logo.png" alt="logo" id="logo-pagina">
				<span>FilmaClub</span>
			</a>

			<!-- Botón para movil -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Menu -->
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Reviews <i class="fas fa-star"></i><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?option=reviews">Listado de Reviews <i class="fab fa-readme"></i></a></li>
						<li><a href="index.php?option=creacionreviews">Creación de Reviews <i class="fas fa-pencil-alt"></i></a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Historias del Cine <i class="fas fa-archive"></i><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?option=historias">Listado de Historias <i class="fab fa-readme"></i></a></li>
						<li><a href="index.php?option=creacionhistorias">Aporta una Historia <i class="fas fa-pencil-alt"></i></a></li>
					</ul>
				</li>
				<li><a href="index.php?option=noticias">Noticias <i class="fas fa-newspaper-o"></i></a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php?option=creadorelementos">Creación <i class="fas fa-plus-square"><span class="caret"></span></i></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?option=creacionpeliculas">Creador de Peliculas <i class="fas fa-film"></i></a></li>
						<li><a href="index.php?option=creacionactores">Creador de Actores <i class="fas fa-theater-masks"></i></a></li>
						<li><a href="index.php?option=creacionnoticias">Creador de Nocicias <i class="far fa-newspaper"></i></a></li>
						<li><a href="index.php?option=creacionproductos">Creador de Productos <i class="fas fa-gifts"></i></a></li>
					</ul>
				</li>
				<li><a href="index.php?option=tienda">FilmaShop <i class="fas fa-shopping-cart"></i></a></li>
				<li><a href="index.php#equipo">About Us <i class="fas fa-users"></i></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- Search -->

				<!-- <li>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar...">
						</div>
						<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
					</form>
				</li> -->

				<!-- Boton Login -->
				<?php
				if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
				 && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)) {
					echo "<a href='index.php?option=usuario'>".$_SESSION["usuario"]."</a>";
					echo "<li><a href='index.php?option=login'><span class='glyphicon glyphicon-log-in'>
					Login</span></a></li>";
				} else {
					echo "<li><a href='index.php?option=login'><span class='glyphicon glyphicon-log-in'>
					Login</span></a></li>";
				}
				?>
			</ul>
		</div>
	</div>
</nav>