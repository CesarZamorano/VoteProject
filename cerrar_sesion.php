<?php
session_start();
session_destroy();
echo "<script language='javascript'>";
echo "alert('Gracias por utilizar nuestro sistema');";
echo "window.location.href='index.php';";
echo "</script>";
?>
