<?php
//print_r($_POST);
require_once("../../conexion/conexion.php");

$foto=$_FILES["foto"]["name"];
$temp=$_FILES["foto"]["tmp_name"];
$tamano=$_FILES["foto"]["size"];
$tipo=$_FILES["foto"]["type"];
//Validamos el tamaño de la imagen
$size = GetImageSize("$temp");
$anchura=$size[0]; 
$altura=$size[1]; 

if (($anchura != 600) and ($altura != 400))
{
	header("Location: "."../inserta_post_form.php?e=1");	
	
	}else 
	{


$kilobytes=$tamano/1024;//con esto temenos la cantidad en kb
//$mega=$kilobytes/1024;


if ($kilobytes > 1024)
{
	header("Location: "."../inserta_post_form.php?e=2");	
	
	}

	
if ($tipo=="image/png" or $tipo=="image/jpeg")
{
	switch ($tipo)
{
	case 'image/png':
		$ext=".png";
	break;
	case 'image/jpeg':
		$ext=".jpg";
	break;
}
//$nombre_foto=$_POST["nom"].$ext;
//$nombre_foto=$_POST["nom"].$ext;
$nombre_foto=$_POST["nombre_foto"];
$nombre_foto=str_replace(" ","_",$nombre_foto);
$nombre_foto=$nombre_foto.$ext;
copy($temp,"../uploads_posts/$nombre_foto");
//**************************************************************************

$idupb_post=$_POST["idupb_post"];
$tipo_post=$_POST["tipo_post"];
$autor=$_POST["autor"];
$titulo_post=$_POST["titulo_post"];
$descripcion_post=$_POST["descripcion_post"];
$nombre_foto=$_POST["nombre_foto"];





$sql="UPDATE upb_post
SET
tipo_post='$tipo_post',
autor='$autor',
titulo_post='$titulo_post',
descripcion_post='$descripcion_post',
imagen_post='$nombre_foto'




WHERE
idupb_post=".$_POST["idupb_post"]."

"
;
//echo $sql;

$res=mysql_query($sql,$con);

header("Location: "."../lista_posts.php?m=1");
}else
{
	header("Location: "."../inserta_post_form.php?e=3");
}

	
	}
?>