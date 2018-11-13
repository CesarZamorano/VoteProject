<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva votación</title>
</head>
<body>
<script src="valida.js"></script>
<?php
include('conectar.php');

//Preguntamos si el boton del formulario de mas abajo fue presionado para realizar la inserción de datos

if (isset($_POST['ingresar']))
	{
		$nombre=$_POST['nombre'];
		$query="select * from eleccion where nombre_eleccion='$nombre'";
		$res =mysql_query($query,$enlace);
			//Consulto si la escuela existe o no
			if(mysql_fetch_row($res))
			{
				//Si existe, enviará un mensaje de que la escuela ya existe en el sistema.
			echo "<script language='javascript'>";
			echo "alert('Eleccion ya existente');";
			echo "window.location.href='?pagina=boton2';";
			echo "</script>";
			}
				else // Sino existe, se crea
			{

			$query="INSERT INTO eleccion (id, nombre_eleccion, estado_votacion) VALUES 
											(' ', '$nombre', '0')";
								
			$resultado = mysql_query($query,$enlace);
			
			echo "<script language='javascript'>";
			echo "alert('Eleccion creada correctamente');";
			echo "window.location.href='?pagina=principal.php';";
			echo "</script>";
		}
	}else{
?>

<!-- Formulario principal, cuando se accede al menú para crear la escuela-->
<p align = "center"><center>
        

<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;"> 
    <h1>Nueva votación</h1><br>
    <form name="form" action="" method="post" onsubmit="return validar_crear_escuela(this);">
        <table>
    <tr>
    	<!--
        <td height ="30">RBD Escuela</td>
        <td><input type="text" name="rbd" size="30" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="Ingrese RBD " /></td>-->
    </tr>
	<tr>
        <td height ="30">Elección</td><td><input type="text" name="nombre" size="30" style="height:25px; border-radius: 10px;" placeholder="Ingrese el nombre" class="form-control" /></td>
    </tr>
        <p>
	<tr>
        <td height ="50">
    <button type="submit" value="Ingresar" name="ingresar" class="btn btn-success">Ingresar
    </button>
        </td>
            <td>
            <center><button type="reset" value="Limpiar" name="limpiar" class="btn btn-primary">Limpiar</button>	</center>	
            </td>
    </tr></table><p>
             
</form>
</center>
</body>
<?php 
}
?>
</html>