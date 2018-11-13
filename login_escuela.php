 
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
		
        <form action="validar_escuela.php" name="form1" method="post" onsubmit="return validarIndex(this)">
            
            <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">
                <font color="white">RBD (sin guión ni digito verificador)</font></label>
            <input type="text" class="form-control" name="rbd" placeholder="Ej: 12345"
            style="height:25px; border-radius: 10px;" onkeypress="return solonumeros(event)" maxlength="5">
            </div>
            <div class="form-group col-md-12">
            <label for="exampleFormControlInput1">
                <font color="white">Clave</font></label>
            <input type="password" class="form-control" name="clave" placeholder="Ingrese contraseña"
            style="height:25px; border-radius: 10px;">
            </div>
            

            <button type="submit" value="Ingresar" name="ingresar" class="btn btn-success">Ingresar</button>
            <button type="reset" value="Limpiar" name="limpiar" class="btn btn-primary">Limpiar</button>
      
        </form></fieldset></center>
    </body> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
