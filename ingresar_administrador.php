<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo usuario</title>
<script src="valida.js"></script>
</head>
<body>
<?php
include('conectar.php');
if (isset($_POST['guardar']))
	{
		$rut=$_POST['rut'];
		$nombre=$_POST['nombre']." ".$_POST['apellido'];
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];
		$clave=$_POST['clave'];
		$comuna=$_POST['comuna'];
		$colegio=$_POST['colegio'];
		$candidato=$_POST['candidato'];
		$sexo=$_POST['sexo'];
		$nro_documento=$_POST['nro_documento'];


		$query="INSERT INTO persona 
		(rut, nombre, direccion, telefono, clave, comuna, rbd_colegio, id_tipo_ciudadano, id_sexo,
		estado_voto, id_tipo_usu, nro_documento) VALUES 
		('$rut', '$nombre', '$direccion', '$telefono', '$clave', '$comuna', '99999', '4', '$sexo', '1', '1', $nro_documento)";
		//echo $query;
		$resultado = mysql_query($query,$enlace);
		echo "<script language='javascript'>";
		echo "alert('Usuario $nombre creado satisfactoriamente');";
		echo "window.location.href='?pagina=principal.php';";
		echo "</script>";
		
}else{
?>
<p align = "center"><center>
        

<fieldset style="width:600px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;"> 
    <h1>Nuevo registro administrador</h1><br>
    <form name="form" action="" method="post" onsubmit="return validarIngresoUsuario(this) && validar_DV(rut.value,digito.value)">
        <table>
    <tr>
   <td>
    	
            <label for="rut">Rut</label>
    </td>
    <td>
    <input type="text" class="form-control" name="rut" placeholder="Ej: 20544585"
            style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" maxlength="8">
            </div>
    </td>        
</tr>
    <tr>
   <td>
    	
            <label for="rut">Nro. Documento</label>
    </td>
    <td>
    <input type="text" class="form-control" name="nro_documento" placeholder="Ej: 111222333"
            style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" maxlength="9">
            </div>
    </td>        
</tr>



    	<!--
        <td height ="30">RBD Escuela</td>
        <td><input type="text" name="rbd" size="30" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="Ingrese RBD " /></td>-->
    <tr>
   <td>
    	
            <label for="nombre">Nombres</label>
    </td>
    <td>
    <input type="text" class="form-control" name="nombre" placeholder="Solo nombre(s)"
            style="height:25px; border-radius: 10px;" onkeypress="return sololetras(event)" >
            </div>
    </td>        
    </tr>

<tr>
   <td>
    	
            <label for="apellido">Apellidos</label>
    </td>
    <td>
    <input type="text" class="form-control" name="apellido" placeholder="Solo apellido(s)"
            style="height:25px; border-radius: 10px;" onkeypress="return sololetras(event)" >
            </div>
    </td>        
    </tr>


    <tr>
   <td>
    	
            <label for="direccion">Dirección</label>
    </td>
    <td>
    <input type="text" class="form-control" name="direccion" placeholder="Ej: Av. Cortejo 123"
            style="height:25px; border-radius: 10px;">
            </div>
    </td>        
    </tr>

<tr>
   <td>
    	
            <label for="telefono">Telefono</label>
    </td>
    <td>
    <input type="text" class="form-control" name="telefono" placeholder="Casa o celular"
            style="height:25px; border-radius: 10px;" >
            </div>
    </td>        
    </tr>

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
   
   <td>Comuna</td>
    <td>
    <input type="text" class="form-control" name="comuna" placeholder="Comuna de residencia"
            style="height:25px; border-radius: 10px;" onkeypress="return sololetras(event)" >	
    </td>
</tr>
    <tr>
    <td>Sexo</td>
    <td><select name="sexo" style="height:25px; border-radius: 10px;width: 240px">
    	<option value="0">---Seleccione una opción---
	        <?php
			$sqlSelect="select id, sexo from sexo";
			$resultSelect =mysql_query($sqlSelect,$enlace);
			while ($fila=mysql_fetch_row($resultSelect))
			{
				echo"<option value='".$fila['0']."'>".$fila['1'];
			}
			?>
            </select></td>
    </tr>
	<tr>
        <p>
            <td height ="50"><input type="submit" name="guardar" value="Guardar"  class="btn btn-success" /></td>
            <td><input type="reset"  name="limpiar" value="Limpiar"  class="btn btn-primary"></td>
            </tr>
        </table>
        <p>
             
     
	
</form>
</center>
</body>
<?php
}
?>
</html>