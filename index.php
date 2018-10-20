 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Votaciones - SLEP</title>
        <?php
		include("conectar.php");
		?>
          <script src="validaciones.js"></script>
        
    </head>
    <body background="fondo.png">
       
    
        <center>
            <img src="img/SL.png" width="300" height="120" align="right"/><br clear="all"> 
            
        <fieldset style="width:300px; border:6px groove #ccc; background:blue; 
        box-shadow: 8px 8px 6px #808080; border-radius: 10px;"> 
        <h1><font color="white">ACCESO PLATAFORMA</font></h1>
        <!--<img src="imagenes/login.jpg" width="250" height="80" align="center"/><p>-->
		
        <form action="validar.php" name="form1" method="post" onsubmit="return validarIndex(this)">
            <font color="white">Rut (sin guión ni digito verificador)</font><br>
            <input type="text" name="rut" size="30" maxlength="8" onkeypress="return solonumeros(event)" max="7"
            style="height:25px; border-radius: 10px;" placeholder="Ejemplo: 20455741"  /> 
            <p>
            <font color="white">Clave</font><br>
            <input type="password" name="clave" size="30" maxlength="100" 
            style="height:25px; border-radius: 10px;" placeholder="Ingrese su contraseña" />
            <p>
            <font color="white">Número de documento</font>
            <input type="text" name="docto" size="30" maxlength="9" onkeypress="return solonumeros(event)" max="9" 
            style="height:25px; border-radius: 10px;" placeholder="9 números del carnet" /> 
            <p>
            <br>
            <input type="submit" value="Ingresar" name="ingresar" style="width:80px;height:25px;border-radius:10px;"/>&nbsp; 
            <input type="reset" value="Limpiar" name="limpiar "style="width:80px;height:25px;border-radius:10px;"/>
        </form></fieldset></center>
    </body> 
</html>
