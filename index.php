 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Votaciones - SLEP</title>
        <?php
		include("conectar.php");
		?>
          <script src="validaciones.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body background="fondo.png">
       
    
        <center>
            <img src="img/servicio.png" width="300" height="120" align="right"/><br clear="all"> 
            
        <fieldset style="width:300px; border:6px groove #ccc; background:blue; 
        box-shadow: 8px 8px 6px #808080; border-radius: 10px;"> 
        <h1><font color="white">ACCESO PLATAFORMA</font></h1>
        <!--<img src="imagenes/login.jpg" width="250" height="80" align="center"/><p>-->
		
        <form action="validar.php" name="form1" method="post" onsubmit="return validarIndex(this)">
            
            <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">
                <font color="white">Rut (sin guión ni digito verificador)</font></label>
            <input type="text" class="form-control" name="rut" placeholder="Ej: 16457114"
            style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" maxlength="8">
            </div>
            <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">
                <font color="white">Clave</font></label>
            <input type="password" class="form-control" name="clave" placeholder="Ingrese contraseña"
            style="height:25px; border-radius: 10px;">
            </div>
            <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">
                <font color="white">Nro documento</font></label>
            <input type="text" class="form-control" name="docto" placeholder="Ej: 502412471"
            style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" maxlength="9">
            </div>
<!--

            <font color="white">Rut (sin guión ni digito verificador)</font><br>
            <input type="text" name="rut" size="30" maxlength="8" onkeypress="return solonumeros(event)" max="7"
            style="height:25px; border-radius: 10px;" placeholder="Ejemplo: 20455741"  /> 
            <p>
                <br>
            <font color="white">Clave</font><br>
            <input type="password" name="clave" size="30" maxlength="100" 
            style="height:25px; border-radius: 10px;" placeholder="Ingrese su contraseña" />
            <p>
            <font color="white">Número de documento</font>
            <input type="text" name="docto" size="30" maxlength="9" onkeypress="return solonumeros(event)" max="9" 
            style="height:25px; border-radius: 10px;" placeholder="9 números del carnet" /> 
            <p>
            <br>

-->
            <button type="submit" value="Ingresar" name="ingresar" class="btn btn-success">Ingresar</button>
            <button type="reset" value="Limpiar" name="limpiar" class="btn btn-primary">Limpiar</button>
            <!--<input type="submit" value="Ingresar" name="ingresar" style="width:80px;height:25px;border-radius:10px;"/>
            &nbsp; 
            <input type="reset" value="Limpiar" name="limpiar "style="width:80px;height:25px;border-radius:10px;"/>-->
        </form></fieldset></center>
    </body> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
