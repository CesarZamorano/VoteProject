<html>
    <head>
 <script src="validaciones.js"></script>
    </head>
<body>
<?php
include('conectar.php');

if (isset($_POST['consultar']))
{
	$rut=$_POST['rut'];
	$nfilas=0;
	$query="select * from voto where rut_persona='$rut'";
	$resultado=mysql_query($query,$enlace);
	$nfilas=mysql_num_rows($resultado);

	if ($nfilas==0)
	{
		
		echo "<script language='javascript'>";
		echo "alert('Apoderado no ha efectuado su sufragio');";
		echo "window.location.href='principal.php';";
		echo "</script>";
	}
	else
	{
		echo "<script language='javascript'>";
		echo "alert('Apoderado ha efectuado su sufragio');";
		echo "window.location.href='principal.php';";
		echo "</script>";	
	}
}else{	
?>
<p align = "center"> <center>
<form action=""  method="post"  onsubmit="return validarForm1_3_1(this) && validar_DV(rut.value,digito.value)">


<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
<h1>Consulta estado votación</h1><br>
Ingrese el RUT a consultar
<center>
<input type="text" name="rut" maxlength="8" size="23" style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" placeholder="(Ej: 12345678)"/> 
<br><br>
<input type="submit" name="consultar" value="Consultar" class="btn btn-success" /></td><br><br>

</center>

</form>
</body>

<?php
}
?>

</html>