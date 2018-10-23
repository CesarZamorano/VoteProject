<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
<?php
session_start();
error_reporting(0);
$rut=$_SESSION['rut'];
$tipo=$_SESSION['tipo'];
$nombre=utf8_decode($_SESSION['nombre']);

if ($rut == null || $rut == '' || $tipo!=1)
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
<fieldset style='width:300px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;'>";
echo"Bienvenido ADMINISTRADOR";
echo"<table align='center'>
<th width='200px'><strong>$nombre</strong></th>
<th width='200px'><a href='cerrar_sesion.php'>Cerrar sesión</a></th>";
echo "</table></fieldset>";
echo "<br><br><br>";
//echo "<center><img src='logo1.jpg'><br>"
?> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Administrador</title>
<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
</head>
<body background="fondo2.jpg">

<div id="general">
<div id="titulo"> 
	<img src="img/slfinal.png" width="1000" height="150" />
   <!--<img src="imagenes/logo3.jpg" width="1000" height="150" />-->
<center>
</center>
</div> 
<div id="izquierda">
	 <div id='flyout_menu'> 
<ul> 
   <li><a href='#'><span>CREAR</span></a> 
      <ul> 
         <li><a href='?pagina=boton'><span>USUARIO</span></a> 
         <li><a href='?pagina=boton2'><span>ESCUELA</span></a>
         <li><a href='?pagina=boton'><span>PERSONA</span></a>
         <li><a href='?pagina=boton'><span>VOTACION</span></a>
         </li> 
      </ul> 
   </li> 
   <li><a href='#'><span>MODIFICAR</span></a>
      <ul> 
         <li><a href='?pagina=boton'><span>USUARIO</span></a> 
         <li><a href='?pagina=boton6'><span>ESCUELA</span></a>
         <li><a href='?pagina=boton'><span>PERSONA</span></a>
         <li><a href='?pagina=boton'><span>VOTACION</span></a></li> 
      </ul>
   <li><a href='#'><span>ELIMINAR</span></a>
      <ul>
         <li><a href='?pagina=boton'><span>USUARIO</span></a> 
         <li><a href='?pagina=boton10'><span>ESCUELA</span></a>
         <li><a href='?pagina=boton'><span>PERSONA</span></a>
         <li><a href='?pagina=boton'><span>VOTACION</span></a> 
         </li> 
      </ul>
   </li>
   <li><a href='?pagina=boton5'><span>CONTACTO</span></a></li> 
</ul> 
</div> 
	  </div>
	  <div id="centro">
	  
     <?php
		switch ($recibe_pagina){
		case "boton1":
		include ("modificar_institucion.php");
		break;
		case "boton2":
		include ("ingresar_escuela.php");
		break;
		case "boton3":
		include ("ingresar_usuario.php");
		break;
		case "boton4":
		include ("ingresar_institucion.php");
		break;
		case "boton5":
		include ("contacto.php");
		break;
    case "boton6":
		include ("modificar_escuela.php");
		break;
    case "boton7":
		include ("eliminar_institucion.php");
		break;
    case "boton8":
    include ("eliminar_institucion.php");
    break;
    case "boton9":
    include ("eliminar_institucion.php");
    break;
    case "boton10":
    include ("eliminar_escuela.php");
    break;
    case "boton11":
    include ("eliminar_institucion.php");
    break;
    case "boton12":
    include ("eliminar_institucion.php");
    break;

		default:
		include ("contacto.php");
		}
	?>
          </div> 
    <div id="pie">
      <u>Sistema de votación electrónica SLEP</u><br><br>
        Dirección: General Oscar Bonilla #6100. Teléfono: 22-8624857<br><br>
        
    </div>
    
<?php
}
?>
</body>
</html>

