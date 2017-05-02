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
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->


	<section id='main-content'>

		<article>
        <header>
            <h1>REGISTER</h1>
        </header> 
		<form method='POST' action='pruu.php'>";
	
		echo "<center>Numero de identificación del animal<input type='text' maxlength='5' name='id'/></br>
		Reino<input type='text' name='reino'/></br>
		Filum<input type='text' name='filum'/></br>
		Clase<input type='text' name='clase'/></br>
		Orden<input type='text' name='orden'/></br>
		Familia<input type='text' name='familia'/></br>
		Genero<input type='text' name='genero'/></br>
		Especie<input type'text' name='especie'/></br>
		*Subespecie<input type='text' name='sub'/></br>
		Nombre científico<input type='text' name='nomcien'/></br>
		Autor<input type='text' name='autor'/></br>
		Rango<input type='text' name='rango'/></br>
		Party<input type='text' name='party'/></br>
		Listed under<input type='text' name='listed'/></br>
		Full note<input type='text' name='fullnote'/></br>
		All distribution<input type='text' name='alldist'/></br>
		*Native distribution<input type='text' name='native'/></br>
		*Introduced distribution<input type='text' name='intro'/></br>
		*Introduced distribution uncertain<input type='text' name='introu'/></br>
		*Reintroduced distribution<input type='text' name='reintro'/></br>
		*Extinct distribution<input type='text' name='extinct'/></br>
		*Extinct distribution uncertain<input type='text' name='extinctu'/></br>
		*Distribution uncertain<input type='text' name='distu'/></br>
		</center>
		<input type='submit'/>
	    *Campos no obligatorios";		
			
		echo "</form>
		</article>
		</section>
			</body>
			</html>";
?>