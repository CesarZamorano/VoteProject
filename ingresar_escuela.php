<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva institución</title>
</head>
<body>
<script src="valida.js"></script>
<?php
include('conectar.php');

//Preguntamos si el boton del formulario de mas abajo fue presionado para realizar la inserción de datos

if (isset($_POST['guardar']))
	{
		$rbd=$_POST['rbd'];
		$escuela=$_POST['nombre'];
		$comuna=$_POST['comuna'];
		$direccion=$_POST['direccion'];
		$query="select * from colegio where rbd=$rbd";
		$res =mysql_query($query,$enlace);
			//Consulto si la escuela existe o no
			if(mysql_fetch_row($res))
			{
				//Si existe, enviará un mensaje de que la escuela ya existe en el sistema.
			echo "<script language='javascript'>";
			echo "alert('Escuela ya existente');";
			echo "window.location.href='?pagina=boton2';";
			echo "</script>";
			}
				else // Sino existe, se crea
			{

			$query="INSERT INTO colegio (rbd, id_comuna, nombre, direccion) VALUES 
											($rbd, '$comuna', '$escuela', '$direccion')";
			$resultado = mysql_query($query,$enlace);
			
			echo "<script language='javascript'>";
			echo "alert('Datos insertados correctamente');";
			echo "window.location.href='?pagina=boton2';";
			echo "</script>";
		}
	}else{
?>

<!-- Formulario principal, cuando se accede al menú para crear la escuela-->
<p align = "center"><center>
        

<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;"> 
    <h1>Nueva Escuela</h1><br>
    <form name="form" action="" method="post" onsubmit="return validar_crear_escuela(this);">
        <table>
    <tr>
        <td height ="30">RBD Escuela</td><td><input type="text" name="rbd" size="30" style="height:25px; border-radius: 10px;"
		onkeypress="return solonumeros(event)" /></td>
    </tr>
	<tr>
        <td height ="30">Nombre escuela</td><td><input type="text" name="nombre" size="30" style="height:25px; border-radius: 10px;"
		onkeypress="return sololetras(event)" /></td>
    </tr>
    <tr>
        <td height ="30">Dirección</td><td><input type="text" name="direccion" size="30" style="height:25px; border-radius: 10px;" 
		 /></td>
    </tr>
    <td>Comuna</td>
    <td><select name="comuna" style="height:25px; border-radius: 10px;width: 240px">
	        <?php
			$sqlSelect="select id, nombre_comuna from comuna";
			$resultSelect =mysql_query($sqlSelect,$enlace);
			while ($fila=mysql_fetch_row($resultSelect))
			{
				echo"<option value='".$fila['0']."'>".$fila['1'];
			}
			?>
            </select></td>
    </tr>
        <p>
	<tr>
            <td height ="50"><input type="submit" name="guardar" value="Guardar" style="width:130px;height:25px; border-radius: 10px;"/></td>
            <td><input type="reset"  name="limpiar" value="Limpiar" style="width:130px;height:25px; border-radius: 10px;"></td>
    </tr></table><p>
             
</form>
</center>
</body>
<?php 
}
?>
</html>