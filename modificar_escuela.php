<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include('conectar.php');
?>
<script src="valida.js"></script>
</head>
<body>

<?php
if (isset($_POST['guardar']))
{

	$n_comuna=$_POST['comuna'];
	$n_direccion=$_POST['direccion'];
	$n_nombre=$_POST['nombre'];
	$n_rbd=$_POST['rbd'];

		$sqlsel="UPDATE colegio SET id_comuna='$n_comuna', direccion='$n_direccion', nombre='$n_nombre' WHERE rbd='$n_rbd'";
		$res=mysql_query($sqlsel,$enlace);		
		echo "<script language='Javascript'>";
		echo "alert('Actualización exitosa');";
		echo "window.location.href='principal.php';";
		echo "</script>";
}
	
	


if (isset($_POST['modificar']))
{
	
	$nfilas=0;
	$rbd=$_POST['rbd'];
	$query="select * from colegio where rbd=$rbd";
	$resultado=mysql_query($query,$enlace);
	$nfilas=mysql_num_rows($resultado);
	if ($nfilas==0)
	{
		echo "<script language='javascript'>";
		echo "alert('No existe la escuela en la base de datos');";
		echo "window.location.href='?pagina=boton6';";
		echo "</script>";
	}
	else
	{
		$sqlsel="select * from colegio where rbd=$rbd";
		$res=mysql_query($sqlsel,$enlace);
		while ($dato = mysql_fetch_array($res))
		{
			$rbd=$dato['rbd'];
			$nombre=$dato['nombre'];
			$comuna=$dato['comuna'];
			$direccion=$dato['direccion'];
		?>
		<p align = "center"><center>
        
		<script src="validaciones.js"></script>
		<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
		box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
                    <h1>Modificar escuela</h1><br>
		<form name="" action="" method="post" onsubmit="return modifica_escuela_2(this);">
        <table>
    
    <tr>
        <td height ="30">Nombre escuela</td><td>
		<?php echo"<input type='text' name='nombre' value='$nombre' size='30' style='height:25px; border-radius: 10px;' onkeypress='return sololetras(event)'/></td>";?>
    </tr>
    <tr>
        <td height ="30">Dirección</td><td>
		<?php echo"<input type='text' name='direccion' value='$direccion' size='30' style='height:25px; border-radius: 10px;'/></td>";?>
    </tr>

	<tr>
        <td height ="30">Comuna</td>

        <td><select name="comuna" style="height:25px; border-radius:10px; width:240px">
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

    <tr>
	    <p>
		<?php echo"<input type='hidden' name='rbd' value='$rbd' size='30' style='height:25px; border-radius: 10px;' />"?>
		
      <td height ="50"><input type="submit" name="guardar" value="Guardar" style="width:130px;height:25px; border-radius: 10px;" />
			<td><input type="button" value="Volver" name="volver atrás" style="width:130px;height:25px; border-radius: 10px; " onclick="history.back()" /></td>
            </tr></table><p>       
</form>
<?php } 
		
		
	}
}else{
// Se arma el primer formulario, ya que las condiciones anteriores son negadas.
?>


<p align = "center"><center>
<form action=""  method="post" onsubmit="return modifica_escuela_1(this);">
       

<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;"> 
     <h1>Modificar escuela</h1><br>
Ingrese el rbd de la escuela

<center>
<input type="text" name="rbd" maxlength="5" size="23" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="RBD sin guion ni DV"/> 


<br><br>
<input type="submit" name="modificar" value="Modificar" style="width:130px;height:25px; border-radius: 10px;"/></td>



</center>

</form>
<?php
}
?> 
</body>
</html>