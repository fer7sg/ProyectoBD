<?php
	$id=$_POST['id'];
	$reino=$_POST['reino'];
	$filum=$_POST['filum'];
	$clase=$_POST['clase'];
	$orden=$_POST['orden'];
	$familia=$_POST['familia'];
	$genero=$_POST['genero'];
	$especie=$_POST['especie'];
	//$sub=$_POST['sub'];
	$nomcien=$_POST['nomcien'];
	$autor=$_POST['autor'];
	$rango=$_POST['rango'];
	$party=$_POST['party'];
	$listed=$_POST['listed'];
	$fullnote=$_POST['fullnote'];
	$alldist=$_POST['alldist'];
	$native=$_POST['native'];
	$intro=$_POST['intro'];
	$introu=$_POST['introu'];
	$reintro=$_POST['reintro'];
	$extinct=$_POST['extinct'];
	$extinctu=$_POST['extinctu'];
	$distu=$_POST['distu'];
	
	
	//EDITAR EN LA TABLA
	
	if ($id!=null && $especie!=null && $nomcien!=null && $autor!=null $alldist!=null)
	{
		$con=mysqli_connect("localhost","root","","NOMBRE DATABASE");
		$query="INSERT INTO TABLA ($id, $reino, $filum..."
		$res=mysqli_query($con,$query);
		echo "cool";
	}
	else
		echo "algun obligatorio no está llenado";
?>