<?php
session_start();
error_reporting(0);

$rut=$_POST['rut'];
$pass=$_POST['clave'];
$docto=$_POST['docto'];
include('conectar.php');
$query="select * from persona where rut=$rut and clave=$pass and nro_documento=$docto";
$resultado=mysql_query($query,$enlace);
$nfilas=mysql_num_rows($resultado);
if($nfilas>0){
	while ($datos = mysql_fetch_array($resultado)){
		$_SESSION['rut']=$datos['rut'];
		$_SESSION['nombre']=$datos['nombre'];
		$_SESSION['tipo']=$datos['id_tipo_usu'];
		$srut=$_SESSION['rut'];
		$snombre=$_SESSION['nombre'];
        echo "<script language='javascript'>";
		echo "alert('Inicio de sesion exitoso $srut');"; 
		if ($datos['id_tipo_usu']=='1'){
			echo "window.location.href='test.php';";
		}
        if ($datos['id_tipo_usu']=='3'){
        echo "window.location.href='principal_usuario.php';";
        }
        if ($datos['id_tipo_usu']=='2')
        { 
			echo "window.location.href='principal_jefe.php';";
		}
			echo "</script>"; 
	}
	
}else{
		echo "<script language='javascript'>";
		echo "alert('Datos incorrectos, por favor reingrese');";
		echo "window.location.href='index.php';";
		echo "</script>";
}


/*$rut=$_POST['usuario'];
$pass=$_POST['clave'];
$pass_md5=md5($pass);
$inst=$_POST['institucion'];
include('conectar.php');
$query="select * from funcionario where rut=$rut and pass='$pass_md5' and id_institucion=$inst" ;
$resultado=mysql_query($query,$enlace);
$nfilas=mysql_num_rows($resultado);
if($nfilas>0){
	while ($datos = mysql_fetch_array($resultado)){
		$_SESSION['rut']=$datos['rut'];
		$_SESSION['tipo']=$datos['id_tipo'];
		$_SESSION['institucion']=$datos['id_institucion'];
		$_SESSION['nombre']=$datos['nombre'];
		$srut=$_SESSION['rut'];
		$snombre=$_SESSION['nombre'];
		
		echo "<script language='javascript'>";
		echo "alert('Inicio de sesion exitoso $snombre');"; 
		if ($datos['id_tipo']=='1'){
			echo "window.location.href='principal.php';";
		}
        if ($datos['id_tipo']=='3'){
        echo "window.location.href='principal_usuario.php';";
        }
        if ($datos['id_tipo']=='2')
        { 
			echo "window.location.href='principal_jefe.php';";
		}
			echo "</script>"; 
	}
	
}else{
		echo "<script language='javascript'>";
		echo "alert('Datos incorrectos, por favor reingrese');";
		echo "window.location.href='index.php';";
		echo "</script>";
}
*/
?>

