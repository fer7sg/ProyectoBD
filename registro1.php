<?php
	
	//$val=$_POST['val'];
	echo "<!DOCTYPE html>
			<html>
			<head>
			</head>
			<body>
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
		</body>
		</html>";			
?>