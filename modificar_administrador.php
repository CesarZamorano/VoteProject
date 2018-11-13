<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include('conectar.php');
?>
<script src="validaciones.js"></script>
<body> 
<?php
if (isset($_POST['guardar']))
{
    $n_rut=$_POST['rut'];
	$n_nombre=$_POST['nombre'];
	$n_direccion=$_POST['direccion'];
	$n_telefono=$_POST['telefono'];
	$n_clave=$_POST['clave'];
	$n_comuna=$_POST['comuna'];
	$n_sexo=$_POST['sexo'];
    $n_usuario=$_POST['usuario'];
	
	$sqlsel="UPDATE persona SET 
    nombre='$n_nombre',
    direccion='$n_direccion',
    telefono='$n_telefono',
    clave='$n_clave',
    comuna='$n_comuna',
    id_sexo='$n_sexo',
    id_tipo_usu='$n_usuario'
    where rut='$n_rut'";

	$res=mysql_query($sqlsel,$enlace);
    echo $sqlsel;

	echo "<script language='javascript'>";
	echo "alert('Usuario $n_nombre ha sido actualizado satisfactoriamente');";
	echo "window.location.href='?pagina=principal.php';";
	echo "</script>";
	
}

if (isset($_POST['modificar']))
{
	$nfilas=0;
	$rut=$_POST['rut'];
	$query="select * from persona where rut=$rut and id_tipo_usu='1'" ;
	$resultado=mysql_query($query,$enlace);
	$nfilas=mysql_num_rows($resultado);
	if ($nfilas==0)
	{
		echo "<script language='javascript'>";
		echo "alert('No existen registros al rut asociado');";
		echo "window.location.href='?pagina=boton2';";
		echo "</script>";
	}
	else
	{
		$sqlsel="select * from persona where rut=$rut and id_tipo_usu='1'";
		$res=mysql_query($sqlsel,$enlace);
		while ($dato = mysql_fetch_array($res))
		{
			$nombre=$dato['nombre'];
            $id_sexo=$dato['id_sexo'];
            $id_usuario=$dato['id_tipo_usu'];
        
		?>
		<p align = "center"><center>
        
		<script src="validaciones.js"></script>
		<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
		box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
        <h1>Modificar usuario</h1>
		<form name="" action="" method="post" onsubmit="return validarForm1_2_1_2(this);">
        <table>
		<tr>

			<td>
    	
            <label for="rut">Nombre</label>
    </td>
    <td>
    <?php echo"<input type='text' name='nombre' value='".$dato['nombre']."' size='30' style='height:25px; border-radius: 10px;' onkeypress='return sololetras(event)' class='form-control'/></td> "?>
            </div>
    </td>        
</tr>
    <tr>
   <td>
    	
            <label for="rut">Nro. Documento</label>
    </td>
    <td>
    <?php echo"<input type='text' name='nro_docto' value='".$dato['nro_documento']."' size='30' style='height:25px; border-radius: 10px;' onkeypress='return solonumeros(event)' class='form-control'/></td>"?>
            </div>
    </td>        
</tr>

    <tr>
   <td>
    	
            <label for="direccion">Dirección</label>
    </td>
    <td>
    <?php echo"<input type='text' name='direccion' value='".$dato['direccion']."' size='30' style='height:25px; border-radius: 10px;' class='form-control'/></td>"?>            
    </div>
    </td>        
    </tr>

<tr>
   <td>
    	
            <label for="telefono">Telefono</label>
    </td>
    <td>
    <?php echo"<input type='text' name='telefono' value='".$dato['telefono']."' size='30' style='height:25px; border-radius: 10px;' class='form-control'/></td>"?>        
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
    <?php echo"<input type='text' name='comuna' value='".$dato['comuna']."' size='30' style='height:25px; border-radius: 10px;' onkeypress='return sololetras(event)' class='form-control'/></td>"?>	
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
                if($fila['0']==$id_sexo)
                {echo"<option selected value='".$fila['0']."'>".$fila['1'];}
                else
                {echo"<option value='".$fila['0']."'>".$fila['1'];}
            }
			?>
            </select></td>
    </tr>

    <tr>

    <td>Tipo de Usuario</td>
    <td><select name="usuario" style="height:25px; border-radius: 10px;width: 240px">
	        <option value="0">---Seleccione una opción---
	        <?php
            $sqlSelect="select id, tipo_usu from tipo_usu_sys";
            $resultSelect =mysql_query($sqlSelect,$enlace);
            while ($fila=mysql_fetch_row($resultSelect))
            {
                if($fila['0']==$id_usuario)
                {echo"<option selected value='".$fila['0']."'>".$fila['1'];}
                else
                {echo"<option value='".$fila['0']."'>".$fila['1'];}
            }
            ?>
            </select></td>
    </tr>

	<tr>
        <p>
        	<?php echo"<input type='hidden' name='rut' value='$rut' size='30' style='height:25px; border-radius: 10px;' />"?>
		
            <td height ="50"><input type="submit" name="guardar" value="Guardar" class="btn btn-success" /></td>
            <td><input type="reset"  name="limpiar" value="Limpiar" class="btn btn-primary"></td>
            </tr>
            </table><p>       
</form>
<?php } 
		
		
	}
}else{
	
?>

<p align = "center"><center>
<form action=""  method="post"  onsubmit="return validarForm1_3_1(this) && validar_DV(rut.value,digito.value)">


<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
<h1>Modificar Administrador</h1><br>
Ingrese el RUT 
<center>
<input type="text" name="rut" maxlength="8" size="23" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="(Ej: 12345678)"/> 
<br><br>
<input type="submit" name="modificar" value="Modificar" class="btn btn-success" /></td><br><br>

</center>

</form>
</body>
<?php
}
?>
</html>