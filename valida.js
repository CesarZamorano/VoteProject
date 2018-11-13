//validar que solo se ingresen numeros
function solonumeros(e){
           var key = window.Event ? e.which : e.keyCode
		   return (key >= 48 && key <= 57)
           }
		   
//validar que solo se ingresen letras		   
function sololetras(e){
           if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
           }
		   
//validar email
function validarEmail(email1) {
expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if ( !expr.test(email1) )
{
alert("Error: La dirección de correo (" + email1 + ") es incorrecta.");
document.form.email.focus();
}
}
// 1.- JS que valida que la pagina "ingresar_escuela.php" no vaya con los campos en blanco
function validar_crear_escuela(formulario)
 {

    if(formulario.rbd.value.length==0) { 
        formulario.rbd.focus();
        alert('Por favor ingrese el RBD del establecimiento');
        return false;
        }
        
    if(formulario.nombre.value.length==0) { 
    formulario.nombre.focus();
    alert('Por favor ingrese nombre de la escuela');
    return false;
	}
    
    if(formulario.direccion.value.length==0) { 
        formulario.direccion.focus();
        alert('Por favor ingrese la direccion');
        return false;
        }
	return true;
 }


 //2.- JS que no permite espacios en blanco en formulario "modifica_escuela.php" al inicio.
 function modifica_escuela_1(formulario)
{
	if(formulario.rbd.value.length==0) { 
        formulario.rbd.focus();
        alert('Por favor ingrese el rbd');
        return false;
        }
	return true;
}

function modifica_escuela_2(formulario)
{
	if(formulario.nombre.value.length==0) { 
        formulario.nombre.focus();
        alert('Por favor ingrese el rbd');
        return false;
        }
    return true;
    
    if(formulario.direccion.value.length==0) { 
        formulario.direccion.focus();
        alert('Por favor ingrese el rbd');
        return false;
        }
    return true;
}

function validarIngresoUsuario(formulario)
{
    
    if(formulario.rut.value.length==0) { 
        formulario.rut.focus();
        alert('Por favor ingrese el rut');
        return false;
        }
    return true;

    
    if(formulario.nombre.value.length==0) { 
        formulario.nombre.focus();
        alert('Por favor ingrese los nombres');
        return false;
        }
    return true;

    
    if(formulario.apellido.value.length==0) { 
        formulario.apellido.focus();
        alert('Por favor ingrese los apellidos');
        return false;
        }
    return true;

    
    if(formulario.direccion.value.length==0) { 
        formulario.direccion.focus();
        alert('Por favor ingrese la direccion');
        return false;
        }
    return true;

    
    if(formulario.telefono.value.length==0) { 
        formulario.telefono.focus();
        alert('Por favor ingrese el telefono');
        return false;
        }
    return true;

    
    if(formulario.clave.value.length==0) { 
        formulario.clave.focus();
        alert('Por favor ingrese la clave');
        return false;
        }
    return true;

    
    if(formulario.comuna.value.length==0) { 
        formulario.comuna.focus();
        alert('Por favor ingrese comuna');
        return false;
        }
    return true;

    if (formulario.sexo.options[formulario.sexo.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione su sexo");
    formulario.sexo.focus(); 
	return false;
    }
	return true;
  

  if (formulario.colegio.options[formulario.colegio.selectedIndex].value == "0")
  {
  alert("Por favor, seleccione su colegio");
  formulario.sexo.focus(); 
  return false;
  }
  return true;

  if (formulario.usuario.options[formulario.usuario.selectedIndex].value == "0")
  {
  alert("Por favor, seleccione un tipo de usuario");
  formulario.usuario.focus(); 
  return false;
  }
  return true;

  if (formulario.candidato.options[formulario.candidato.selectedIndex].value == "0")
  {
  alert("Por favor, responda la pregunta '¿Es candidato?'");
  formulario.candidato.focus(); 
  return false;
  }
  return true;

    }

  

    
