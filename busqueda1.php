<?PHP
//variables y query
echo"<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='utf-8'>
<title> Species Asia/ Search </title>

<link rel='stylesheet' href='styleS.css'>
</head>

<body> 
<header id='main-header'>
    
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
            <h1>Results</h1>
        </header>
        <center>
        
        <div class='content'>
		<table>
		<tr>
		<td> ID Specie </td>
		<td> Scientific Name </td>
		<td> Author </td>
		<td> Distribution </td>
		</tr>
		<tr>
		<td> /*Aquí la variable de la BD, concatenadas*/</td>
		<td> /*Aquí la variable de la BD*/ </td>
		<td> /*Aquí la variable de la BD*/</td>
		<td> /*Aquí la variable de la BD*/</td>
		</tr>
		</table>
		</center>
        
    </article>  <!-- / article -->

</section><!-- / #main-content -->



</body>
</html>";
?>