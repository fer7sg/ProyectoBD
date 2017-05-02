<?php 
	echo "<!DOCTYPE html>
	<html lang='es'>
	<head>
	<meta charset='utf-8'>
	<title> Species Asia/ Search </title>

	<link rel='stylesheet' href='styleS.css'>
	</head>

	<body> 
	<header id='main-header>
		
		<a id='logo-header' href='Proyecto1.php'>
			<span class='site-name'>Species Data Base</span>
			<span class='site-desc'>Species & Subspecies from Asia</span>
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a href='Busqueda.php'>Search</a></li>
				<li><a href='Registro.php'>Register</a></li>
				<li><a href='Creditos.php'>Credits</a></li>
				<li><a href='update.php'>Actualizar</a></li>
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->
	<form method='POST' action='update1.php'>";
	echo "Escrbe el id o nombre científico de la especie que quieres actualizar <input type='text' name='id'/>";
	
	echo "<input type='submit'/>
		</form>
			</body>
			</html>";	
?>