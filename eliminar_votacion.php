<html>
    <head>
 <script src="validaciones.js"></script>
    </head>
<body>
<?php
include('conectar.php');

if (isset($_POST['confirmar']))
{
	$n_rbd = $_POST['rbd'];
	$query = "delete from colegio where rbd='$n_rbd'";
	$resultado = mysql_query($query,$enlace);

		echo "<script language='javascript'>";
		echo "alert('Usuario borrado exitosamente');";
		echo "window.location.href='?pagina=boton5';";
		echo "</script>";
}

if (isset($_POST['eliminar']))
{
	$rbd=$_POST['rbd'];
	$nfilas=0;
	$query="select * from colegio, comuna where colegio.id_comuna=comuna.id and colegio.rbd='$rbd'";
	$resultado=mysql_query($query,$enlace);
	$nfilas=mysql_num_rows($resultado);

	if ($nfilas==0)
	{
		//echo $query;
		echo "<script language='javascript'>";
		echo "alert('No existe escuela ingresada');";
		echo "window.location.href='?pagina=boton10';";
		echo "</script>";
	}
	else
	{
		while ($dato = mysql_fetch_array($resultado))
		{
			
		?>
		
		<body>
		<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
		box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
		<form action=""  method="post" onsubmit="return validarForm(this);">
		<?php echo"<center></center><h2>RBD: ".$dato['rbd']. "</h2><br><br>
				   <center></center><h2>Nombre: ".$dato['nombre']." </h2><br><br>
				   <center></center><h2>Direccion: ".$dato['direccion']." </h2><br><br>
				   <center></center><h2>Comuna: ".$dato['nombre_comuna']." </h2><br><br>
				   <input type='hidden' name='rbd' value=$rbd>"; ?>
		<input type="submit" name="confirmar" value="Eliminar" style="width:130px;height:25px; border-radius: 10px;" />
		<input type="button" value="Volver al menú" name="volver atrás" style="width:130px;height:25px; border-radius: 10px; " onclick="history.back()" />
        </form>
        </body>
		
		<?php
	    }
	}
}else{	
?>
<p align = "center"> <center>
<form action=""  method="post"  onsubmit="return validarForm1_3_1(this) && validar_DV(rut.value,digito.value)">


<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
<h1>Eliminar votacion</h1><br>
 <TABLE>
  <tr>
    <td><select name="eleccion" style="height:25px; border-radius: 10px;width: 240px">
    	<option value="0">---Seleccione una votación---
	        <?php
			$sqlSelect="select * from eleccion";
			$resultSelect =mysql_query($sqlSelect,$enlace);
			while ($fila=mysql_fetch_row($resultSelect))
			{
				echo"<option value='".$fila['0']."'>".$fila['1'];
			}
			?>
            </select></td>
    </tr>
</TABLE>
<br><br>
<input type="submit" name="eliminar" value="Eliminar" class="btn btn-success" /></td>
<br><br>
</center>

</form>
</body>

<?php
}
?>

</html>