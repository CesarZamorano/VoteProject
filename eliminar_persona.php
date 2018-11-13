<html>
    <head>
 <script src="validaciones.js"></script>
    </head>
<body>
<?php
include('conectar.php');

if (isset($_POST['confirmar']))
{
	$n_rut=$_POST['rut'];
	$query = "delete from persona where rut='$n_rut' and id_tipo_usu='3'";
	$resultado = mysql_query($query,$enlace);

		echo "<script language='javascript'>";
		echo "alert('Usuario borrado exitosamente');";
		echo "window.location.href='?pagina=boton5';";
		echo "</script>";
}

if (isset($_POST['eliminar']))
{
	$rut=$_POST['rut'];
	$nfilas=0;
	$query="select * from persona where rut='$rut' and id_tipo_usu='3'";
	$resultado=mysql_query($query,$enlace);
	$nfilas=mysql_num_rows($resultado);

	if ($nfilas==0)
	{
		//echo $query;
		echo "<script language='javascript'>";
		echo "alert('No existe apoderado ingresado');";
		echo "window.location.href='?pagina=boton9';";
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
		<?php echo"<center></center><h2>RUT: ".$dato['rut']. "</h2><br><br>
				   <center></center><h2>Nombre: ".$dato['nombre']." </h2><br><br>
				   <input type='hidden' name='rut' value=$rut>"; ?>
		<input type="submit" name="confirmar" value="Eliminar" class="btn btn-success" />
		<input type="button" value="Volver al menú" name="volver atrás" class="btn btn-primary" 
		onclick="history.back()" />
		<br><br>
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
<h1>Eliminar apoderado</h1><br>
Ingrese el RUT 
<center>
<input type="text" name="rut" maxlength="8" size="23" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="(Ej: 12345678)"/> 
<br><br>
<input type="submit" name="eliminar" value="Eliminar" class="btn btn-success" /></td><br><br>

</center>

</form>
</body>

<?php
}
?>

</html>