<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
session_start();
error_reporting(0);
$rut=$_SESSION['rut'];
$tipo=$_SESSION['tipo'];
$nombre=utf8_decode($_SESSION['nombre']);

if ($rut == null || $rut == '' || $tipo!=2)
{
		echo "<script language='javascript'>";
		echo "alert('Esta cuenta no tiene privilegios de administrador, por favor reingresar');";
		echo "window.location.href='index.php';";
		echo "</script>";
}
else
{ 
@$recibe_pagina=$_GET['pagina'];
?>
<?php

echo "<br><center>
<fieldset style='width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;'>";
echo"Bienvenido APODERADO";
echo"<table align='center'>
<th width='200px'><strong>$nombre</strong></th>
<th width='100px'><a href='cerrar_sesion.php'>Cerrar sesión</a></th>";
echo "</table></fieldset>";
echo "<br><br><br>";
//echo "<center><img src='logo1.jpg'><br>"
?> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Administrador</title>
<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
</head>
<body style="background-image: url(fondo2.jpg); background-size: 100% 100%; background-attachment: fixed;" >

<div id="general">
<div id="titulo"> 
	<img src="img/slfinal.png" width="1000" height="150" />
   <!--<img src="imagenes/logo3.jpg" width="1000" height="150" />-->
<center>
</center>
</div> 
<div>
<br><br>
<h1>Votación electrónica</h1>
<br><br>
<h3>A continuación, escoja su candidato</h3>

<?php
}
?>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

