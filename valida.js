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