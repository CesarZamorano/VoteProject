<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
error_reporting(0);
$rut=$_SESSION['rut'];
$tipo=$_SESSION['tipo'];
$inst=$_SESSION['institucion'];
$nombre=$_SESSION['nombre'];

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
echo "<center>
<fieldset style='width:300px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;'>";
echo"Bienvenido ADMINISTRADOR";
echo"<table align='center'>
<th width='200px'><strong>$nombre</strong></th>
<th width='200px'><a href='cerrar_sesion.php'>Cerrar sesión</a></th>";
echo "</table></fieldset>";
echo "<br>";
echo "<center><img src='logo1.jpg'"
?> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Administrador</title>
<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
</head>
<body background="fondo2.jpg">

<div id="general">
<div id="titulo"> 
    <img src="imagenes/logo3.jpg" width="1000" height="150" />
<center>
</center>
</div> 
<div id="izquierda">
	 <div id='flyout_menu'> 
<ul> 
   <li><a href='#'><span>CREAR</span></a> 
      <ul> 
         <li><a href='?pagina=boton3'><span>USUARIO</span></a> 
         <li><a href='?pagina=boton4'><span>INSTITUCION</span></a>
         </li> 
      </ul> 
   </li> 
   <li><a href='#'><span>MODIFICAR</span></a>
      <ul> 
         <li><a href='?pagina=boton2'><span>USUARIO</span></a> 
         <li><a href='?pagina=boton1'><span>INSTITUCION</span></a>
         </li> 
      </ul>
   <li><a href='?pagina=boton5'><span>ELIMINAR</span></a>
      <ul> 
         <li><a href='?pagina=boton6'><span>USUARIO</span></a> 
         <li><a href='?pagina=boton7'><span>INSTITUCION</span></a>
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
		include ("modificar_usuario.php");
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
		include ("eliminar_usuario.php");
		break;
                case "boton7":
		include ("eliminar_institucion.php");
		break;
		default:
		include ("contacto.php");
		}
	?>
          </div> 
    <div id="pie">
      <u>Sistema Integrado de Registro para la Prevención (SIRP)</u><br><br>
        Dirección: Alameda #340. Teléfono: 22-8624857<br><br>
        
    </div>
    
<?php
}
?>
</body>
</html>

