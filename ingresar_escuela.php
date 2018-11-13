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

if (isset($_POST['ingresar']))
	{
		$rbd=$_POST['rbd'];
		$escuela=$_POST['nombre'];
		$comuna=$_POST['comuna'];
		$direccion=$_POST['direccion'];
		$clave=$_POST['clave'];
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

			$query="INSERT INTO colegio (rbd, id_comuna, nombre, direccion, clave) VALUES 
											($rbd, '$comuna', '$escuela', '$direccion', '$clave')";
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
    	
        <td height ="30">RBD Escuela</td>
        <td><input type="text" name="rbd" size="30" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="Ingrese RBD " /></td>
    </tr>
	<tr>
        <td height ="30">Nombre escuela</td><td><input type="text" name="nombre" size="30" style="height:25px; border-radius: 10px;" onkeypress="return sololetras(event)" placeholder="Ingrese el nombre" class="form-control" /></td>
    </tr>
    <tr>
        <td height ="30">Dirección</td><td><input type="text" name="direccion"  class="form-control" size="30" style="height:25px; border-radius: 10px;" placeholder="Ingrese la dirección" class="form-control"/></td>
    </tr>
    <tr>
    <td>Comuna</td>
    <td><select name="comuna" style="height:30px; border-radius: 10px;width: 240px"  class="form-control form-control-sm">
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
   <td>
    	
            <label for="clave">Clave</label>
    </td>
    <td>
    <input type="password" class="form-control" name="clave" placeholder="Ingrese contraseña"
            style="height:25px; border-radius: 10px;"  >
        
    </td>        
    </tr>

	<tr>
        <td height ="50">
    <button type="submit" value="Ingresar" name="ingresar" class="btn btn-success">Ingresar
    </button>
        </td>
            <td>
            <button type="reset" value="Limpiar" name="limpiar" class="btn btn-primary">Limpiar</button>	
            </td>
    </tr></table><p>
             
</form>
</center>
</body>
<?php 
}
?>
</html>