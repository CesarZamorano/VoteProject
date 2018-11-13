<html>
    <head>
 <script src="validaciones.js"></script>
    </head>
<body>
<?php
include('conectar.php');

if (isset($_POST['seleccionar']))
{
	$eleccion=$_POST['eleccion'];
	$nfilas=0;
	$query="UPDATE eleccion SET estado_votacion='0'";
	$resultado = mysql_query($query,$enlace);

	$query2="UPDATE eleccion SET estado_votacion='1' where id='$eleccion'";
	$resultado2=mysql_query($query2,$enlace);

	echo "<script language='javascript'>";
	echo "alert('Cambio de eleccion realizado satisfactoriamente');";
	echo "window.location.href='?pagina=principal.php';";
	echo "</script>";
		
}else{	
?>
<p align = "center"> <center>
<form action=""  method="post"  onsubmit="return validarForm1_3_1(this) && validar_DV(rut.value,digito.value)">


<fieldset style="width:500px; border:6px groove #E2F1F2; background:whitesmoke; 
box-shadow: 8px 8px 6px #808080; border-radius: 10px;">
<h1>Proceso de votación</h1><br>
Seleccione el proceso de elección que se va a ejecutar<br><br>
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
<input type="submit" name="seleccionar" value="Seleccionar" class="btn btn-success" /></td>
<br><br>
</center>

</form>
</body>

<?php
}
?>

</html>