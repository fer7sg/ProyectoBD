<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title> Species Asia/ Search </title>

<link rel="stylesheet" href="styleS.css">
</head>

<body> 
<header id="main-header">
    
    <a id="logo-header" href="Proyecto1.php">
        <span class="site-name">Species Data Base</span>
        <span class="site-desc">Species & Subspecies from Asia</span>
    </a> <!-- / #logo-header -->

    <nav>
        <ul>
            <li><a href="Busqueda.php">Search</a></li>
            <li><a href="Registro.php">Register</a></li>
            <li><a href="Creditos.php">Credits</a></li>
			<li><a href="update.php">Actualizar</a></li>
        </ul>
    </nav><!-- / nav -->

</header><!-- / #main-header -->


<section id="main-content">

    <article>
        <header>
            <h1>SEARCH</h1>
        </header>
        <center>
        
        <div class="content">
		<form action="Busqueda1.php" method="POST">
		<table>
		<tr>
		<td>Search specie or subspecie: </td>
		<td><input type="text" name="busqueda"/></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" value="Search" class="button default green"/></td>
		</tr>
		</table>
		</form>
		</center>
        
    </article>  <!-- / article -->

</section><!-- / #main-content -->



</body>
</html>