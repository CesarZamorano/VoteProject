<?php
session_start();
error_reporting(0);

$rbd=$_POST['rbd'];
$pass=$_POST['clave'];
$escuela="escuela";

include('conectar.php');
$query="select * from colegio where rbd='$rbd' and clave='$pass'";
$resultado=mysql_query($query,$enlace);
$nfilas=mysql_num_rows($resultado);

if($nfilas>0){
	while ($datos = mysql_fetch_array($resultado)){
		$_SESSION['rbd']=$datos['rbd'];
		$_SESSION['nombre']=utf8_decode($datos['nombre']);
		$_SESSION['escuela']=$escuela;
		
		$srbd=$_SESSION['rbd'];
		$snombre=$_SESSION['nombre'];
        echo "<script language='javascript'>";
		echo "alert('Inicio de sesion exitoso $srut');";
		echo "window.location.href='principal_colegio.php';"; 
		echo "</script>"; 
	}
	
}else{
		echo "<script language='javascript'>";
		echo "alert('Datos incorrectos, por favor reingrese');";
		echo "window.location.href='login_escuela.php';";
		echo "</script>";
}

?>