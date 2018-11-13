<html>
    <head>
 <script src="validaciones.js"></script>
    </head>
<body>
<?php
include('conectar.php');

if (isset($_POST['confirmar']))
{
	$n_id = $_POST['id'];
	$n_nombre =$_POST['nombre'];
	$query = "UPDATE eleccion SET nombre_eleccion='$n_nombre' where id='$n_id'";
	$resultado = mysql_query($query,$enlace);

		echo "<script language='javascript'>";
		echo "alert('Eleccion borrada satisfactoriamente');";
		echo "window.location.href='?pagina=principal.php';";
		echo "</script>";
}

if (isset($_POST['modificar']))
{
	$eleccion=$_POST['eleccion'];
	$nfilas=0;
	$query="select * from eleccion where id='$eleccion'";
	$resultado=mysql_query($query,$enlace);
	$nfilas=mysql_num_rows($resultado);

		while ($dato = mysql_fetch_array($resultado))
		{

?>
		<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
		box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
		<form action=""  method="post" onsubmit="return validarForm(this);">
			<h2>Modificar nombre elección</h2><br>
		<table>
		<tr>
			<td>
            <label for="rut">Nombre elección</label>
    </td>
    <td>
    <?php echo"<input type='text' name='nombre' value='".$dato['nombre_eleccion']."' size='30' style='height:25px; border-radius: 10px;' onkeypress='return sololetras(event)' class='form-control'/></td> "?>
    </td>

    </tr>
    <tr></tr>
    <tr> 
    	<?php echo"<input type='hidden' name='id' value='$eleccion' size='30' style='height:25px; border-radius: 10px;' />"?>
    <td>       
		<br><input type="submit" name="confirmar" value="Confirmar" class="btn btn-success" /></td>
	<td><center><br><input type="button" value="Volver al menú" name="volver atrás" class="btn btn-info" onclick="history.back()" /></center></td>
	</tr>

</table>
<br><br>
        </form>
		
		<?php
	    }
	
}else{	
?>

<p align = "center"> <center>
<form action=""  method="post"  onsubmit="return validarForm1_3_1(this) && validar_DV(rut.value,digito.value)">


<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
<h1>Modificar eleccion</h1><br>
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

<input type="submit" name="modificar" value="Modificar" class="btn btn-success" /></td>
<br><br>
</center>

</form>
</body>

<?php
}
?>

</html>