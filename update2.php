<?php
			$id=$_POST['id'];
			$reino=$POST['reino'];
			$filum=$POST['filum'];
			$clase=$POST['clase'];
			$orden=$POST['orden'];
			$familia=$POST['familia'];
			$genero=$POST['genero'];
			$especie=$POST['especie'];
			$sub=$POST['sub'];
			$nomcien=$POST['nomcien'];
			$autor=$POST['autor'];
			$rango=$POST['rango'];
			$party=$POST['party'];
			$listed=$POST['listed'];
			$full=$POST['full'];
			$all=$POST['all'];
			$native=$POST['native'];
			$intro=$POST['intro'];
			$introu=$POST['introu'];
			$reintro=$POST['reintro'];
			$ext=$POST['ext'];
			$extu=$POST['extu'];
			$disu=$POST['disu'];
	$con=mysqli_connect("localhost","root","","anasia");
	$query='SELECT * FROM especies WHERE id_especie LIKE '.$id.';';
	$res=mysqli_query($con,$query);
	$query="UPDATE especies SET id_especies='$id', especie='$especie', party='$party', listu='$listed'";
	$res=mysqli_query($con,$query);
	echo "Bien, puedes consultar tus cambios en la página principal";
	
?>