<?php
	$uni=$_POST['id'];
	if ($uni==null)
		echo "el campo es obligatorio";
	else
	{
			$id=$uni;
			$val=1;
		
	}
	
	
	if ($val==1)
		{
			$con=mysqli_connect("localhost","root","","cursoweb");
			$query='SELECT * FROM ALUMNOS WHERE no_cta LIKE '.$nomcien.';';
			echo $query."</br>";
			$res=mysqli_query($con,$query);
			$fila=mysqli_fetch_assoc($res);
			echo $fila['ap_pat']."SDF</br>";
			$reino=$fila['reino'];
			$filum=$fila['filum'];
			$clase=$fila['clase'];
			$orden=$fila['orden'];
			$familia=$fila['familia'];
			$genero=$fila['genero'];
			$especie=$fila['especie'];
			$sub=$fila['sub'];
			$nomcien=$fila['nomcien'];
			$autor=$fila['autor'];
			$rango=$fila['rango'];
			$party=$fila['party'];
			$listed=$fila['listed'];
			$full=$fila['full'];
			$all=$fila['all'];
			$native=$fila['native'];
			$intro=$fila['intro'];
			$introu=$fila['introu'];
			$reintro=$fila['reintro'];
			$ext=$fila['ext'];
			$extu=$fila['extu'];
			$disu=$fila['disu'];
			echo "<!DOCTYPE html>
			<html lang='es'>
			<head>
			<meta charset='utf-8'>
			<title> Species Asia/ Search </title>

			<link rel='stylesheet' href='styleS.css'>
			</head>

			<body>
			<form method='POST' action='update2.php'/>";
			echo "Id <input type='text' name='id' value='$uni'/></br>
				Reino <input type='text' name='reino' value='$reino'/></br>
				Filum<input type='text' name='filum' value='$filum'/></br>
				Clase<input type='text' name='clase' value='$re'/></br>
				Orden<input type='text' name='orden' value='$re'/></br>
				Familia<input type='text' name='familia' value='$re'/></br>
				Genero<input type='text' name='genero' value='$re'/></br>
				Especie<input type'text' name='especie' value='$re'/></br>
				*Subespecie<input type='text' name='sub' value='$re'/></br>
				Nombre científico<input type='text' name='nomcien' value='$re'/></br>
				Autor<input type='text' name='autor' value='$re'/></br>
				Rango<input type='text' name='rango' value='$re'/></br>
				Party<input type='text' name='party' value='$re'/></br>
				Listed under<input type='text' name='listed' value='$re'/></br>
				Full note<input type='text' name='fullnote' value='$re'/></br>
				All distribution<input type='text' name='alldist' value='$re'/></br>
				*Native distribution<input type='text' name='native' value='$re'/></br>
				*Introduced distribution<input type='text' name='intro' value='$re'/></br>
				*Introduced distribution uncertain<input type='text' name='introu' value='$re'/></br>
				*Reintroduced distribution<input type='text' name='reintro' value='$re'/></br>
				*Extinct distribution<input type='text' name='extinct' value='$re'/></br>
				*Extinct distribution uncertain<input type='text' name='extinctu' value='$re'/></br>
				*Distribution uncertain<input type='text' name='distu' value='$re'/></br>";
		echo "<input type='submit'/>
			</form>
			</body>
			
	}
?>