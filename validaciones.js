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

//validar el index completo que no vaya en blanco		   
function validarIndex(formulario)
{
	if(formulario.usuario.value.length==0) { 
    formulario.usuario.focus();
    alert('Por favor ingrese el usuario (RUT sin puntos ni guion)');
    return false;
	}
	if(formulario.clave.value.length==0) { 
    formulario.clave.focus();
    alert('Por favor ingrese su clave');
    return false;
	}
	if (formulario.institucion.options[formulario.institucion.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione una institución");
    formulario.institucion.focus(); 
	return false;
    }
	return true;
  }
  
 //Administrador General 
 //1.- Validar campos en blanco de archivo "ingresar_usuario.php"
 
 function validarForm1_1_1(formulario)
 {
	if (formulario.institucion.options[formulario.institucion.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione una institución");
    formulario.institucion.focus(); 
	return false;
    }
	
	if (formulario.usuario.options[formulario.usuario.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione un cargo");
    formulario.usuario.focus(); 
	return false;
    }
	
	if (formulario.sector.options[formulario.sector.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione un sector");
    formulario.sector.focus(); 
	return false;
    }
	
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0 ) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	
	if(formulario.clave.value.length==0) { 
    formulario.clave.focus();
    alert('Por favor ingrese su clave');
    return false;
	}
	
	if(formulario.nombre.value.length==0) { 
    formulario.nombre.focus();
    alert('Por favor ingrese su nombre');
    return false;
	}
	return true;
 }
 
 //Administrador general 
 //2.- Validar campos en blanco de archivo "ingresar_institucion.php"
 
 function validarForm1_1_2(formulario)
 {
	if(formulario.nombre.value.length==0) { 
    formulario.nombre.focus();
    alert('Por favor ingrese nombre de sector');
    return false;
	}
	
	if(formulario.sector.value.length==0) { 
    formulario.sector.focus();
    alert('Por favor ingrese la cantidad de sectores');
    return false;
	}
	
	return true;
 }
 
 //Administrador General 
 //3.- Validar campos en blanco de archivo "modificar_usuario.php"
 //Consulta de funcionario existente
 function validarForm1_2_1_1(formulario)
 {
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	return true; 
 }

 //Modificacion de usuario
 function validarForm1_2_1_2(formulario)
 {
	if(formulario.nombre.value.length==0) { 
    formulario.nombre.focus();
    alert('Por favor ingrese nombre');
    return false;
	}
	
	if(formulario.clave.value.length==0) { 
    formulario.clave.focus();
    alert('Por favor ingrese nueva clave');
    return false;
	}
	return true;
 }
 
//Administrador General 
//4.- Validar campos en blanco de archivo "modificar_institucion.php"
//Consulta de institucion existente

function validarForm1_2_2_1(formulario)
{
	if (formulario.institucion.options[formulario.institucion.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione una institución");
    formulario.institucion.focus(); 
	return false;
    }
	return true;
}
//Modificacion de institucion existente
function validarForm1_2_2_2(formulario)
{
	if(formulario.n_nue.value.length==0) { 
    formulario.n_nue.focus();
    alert('Por favor ingrese nombre nuevo a la institución');
    return false;
	}
	return true;
}

//Administrador General 
//4.- Validar campos en blanco de archivo "eliminar_usuario.php"

function validarForm1_3_1(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	return true;
}

//Administrador General 
//5.- Validar campos en blanco de archivo "eliminar_institucion.php"

function validarForm1_3_2(formulario)
{
	if (formulario.institucion.options[formulario.institucion.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione una institución");
    formulario.institucion.focus(); 
	return false;
    }
	return true;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Jefe de Zona
//1.- Validar campos en blanco de archivo "ingresar_usuario_u.php"

function validarForm2_1_1(formulario)
{
	if (formulario.sector.options[formulario.sector.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione un sector");
    formulario.sector.focus(); 
	return false;
    }
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	if(formulario.nombre.value.length==0) { 
    formulario.nombre.focus();
    alert('Por favor ingrese nombre');
    return false;
	}
	if(formulario.clave.value.length==0) { 
    formulario.clave.focus();
    alert('Por favor ingrese su clave');
    return false;
	}
	return true;
}

//Jefe de Zona
//2.- Validar campos en blanco de archivo "crear_sector.php"

function validarForm2_1_2(formulario)
{
	if(formulario.nombre.value.length==0) { 
    formulario.nombre.focus();
    alert('Por favor ingrese nombre');
    return false;
	}
	
	if(formulario.descripcion.value.length==0) { 
    formulario.descripcion.focus();
    alert('Por favor ingrese una descripcion');
    return false;
	}
	
	return true;
}

//Jefe de Zona
//2.- Validar campos en blanco de archivo "menu_reportes.php"

function validarForm2_1_3(formulario){
opciones = document.getElementsByName("reportes");
var seleccionado = false;
for(var i=0; i<opciones.length; i++) {    
  if(opciones[i].checked) {
    seleccionado = true;
    break;
  }
}
 
if(!seleccionado) {
alert('Por favor, seleccione una opcion');
  return false;
}
}

//Jefe de Zona
//3.- Validar campos en blanco de archivo "reporte5.php"

function validarForm2_1_3_5(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	return true;
}

//Jefe de Zona
//3.- Validar campos en blanco de archivo "reporte6.php"

function validarForm2_1_3_6(formulario)
{
	if (formulario.delito.options[formulario.delito.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione un delito");
    formulario.delito.focus(); 
	return false;
    }
	
	if (formulario.comuna.options[formulario.comuna.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione una comuna");
    formulario.comuna.focus(); 
	return false;
    }
	
	if (formulario.sector.options[formulario.sector.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione sector");
    formulario.sector.focus(); 
	return false;
    }
	
	if(formulario.fecha1.value.length==0) { 
    formulario.fecha1.focus();
    alert('Por favor ingrese una fecha');
    return false;
	}
	
	if(formulario.fecha2.value.length==0) { 
    formulario.fecha2.focus();
    alert('Por favor ingrese uan fecha');
    return false;
	}
	
	return true;
}

//Jefe de Zona
//4.- Validar campos en blanco de archivo "reporte7.php"

function validarForm2_1_3_7(formulario)
{
	if (formulario.sector.options[formulario.sector.selectedIndex].value == "0")
    {
    alert("Por favor, seleccione sector");
    formulario.sector.focus(); 
	return false;
    }
	return true;
}

//Jefe de Zona
//5.- Validar campos en blanco de archivo "reporte8.php"
		   
function validarForm2_1_3_8(formulario)
{
	if (formulario.seleccion.options[formulario.seleccion.selectedIndex].value == "0")
    {
    alert("No ha escogido un campo de busqueda");
    formulario.seleccion.focus(); 
	return false;
    }
	
	if(formulario.texto.value.length==0) { 
    formulario.texto.focus();
    alert('Por favor ingrese una palabra para buscar');
    return false;
	}
	
	return true;
}	

//Jefe de Zona
//6.- Validar campos en blanco de archivo "reporte9.php"

function validarForm2_1_3_9(formulario)
{
	if(formulario.fecha1.value.length==0) { 
    formulario.fecha1.focus();
    alert('Por favor ingrese una fecha');
    return false;
	}
	
	if(formulario.fecha2.value.length==0) { 
    formulario.fecha2.focus();
    alert('Por favor ingrese uan fecha');
    return false;
	}
	
	return true;
}

//Operador
//1.- Validar campos en blanco de archivo "ingresar_delincuente.php"

function validarForm3_1_1(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	return true;
}

//Operador
//1-1.- Validar campos en blanco de archivo "ingresar_delincuente.php" despues de la consulta en el nuevo formulario
//generado

function validarForm3_1_1_1(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	
	if(formulario.app.value.length==0) { 
    formulario.app.focus();
    alert('Por favor ingrese apellido paterno');
    return false;
	}
	
	if(formulario.apm.value.length==0) { 
    formulario.apm.focus();
    alert('Por favor ingrese apellido materno');
    return false;
	}
	
	if(formulario.nombres.value.length==0) { 
    formulario.nombres.focus();
    alert('Por favor ingrese nombres');
    return false;
	}
	
	if(formulario.apodo.value.length==0) { 
    formulario.apodo.focus();
    alert('Por favor ingrese un apodo');
    return false;
	}
	
	if(formulario.domicilio.value.length==0) { 
    formulario.domicilio.focus();
    alert('Por favor ingrese domicilio de residencia');
    return false;
	}
	
	if (formulario.comuna.options[formulario.comuna.selectedIndex].value == "0")
    {
    alert("Por favor, escoger una comuna de residencia");
    formulario.comuna.focus(); 
	return false;
    }
	
	if(formulario.telefono.value.length==0) { 
    formulario.telefono.focus();
    alert('Por favor ingrese un telefono de contacto');
    return false;
	}
	
	if(formulario.email.value.length==0) { 
    formulario.email.focus();
    alert('Por favor un correo valido');
    return false;
	}
	
	if(formulario.f_nac.value.length==0) { 
    formulario.f_nac.focus();
    alert('Por favor ingrese fecha de nacimiento');
    return false;
	}
	
	opciones = document.getElementsByName("estado");
	var seleccionado = false;
	for(var i=0; i<opciones.length; i++) {    
	if(opciones[i].checked) {
    seleccionado = true;
    break;
	}
	}
 
	if(!seleccionado) {
	alert('Por favor, seleccione un estado');
	return false;
	}
	
	return true;
}


//Operador
//2.- Validar campos en blanco de archivo "registrar_delito.php".

function validarForm3_1_2(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese rut');
    return false;
	}
	
	if(formulario.direccion.value.length==0) { 
    formulario.direccion.focus();
    alert('Por favor ingrese el campo direccion');
    return false;
	}
	
	if (formulario.delito.options[formulario.delito.selectedIndex].value == "0")
    {
    alert("Por favor, escoger delito");
    formulario.delito.focus(); 
	return false;
    }
	
	if (formulario.comuna.options[formulario.comuna.selectedIndex].value == "0")
    {
    alert("Por favor, escoger una comuna");
    formulario.comuna.focus(); 
	return false;
    }
	
	if (formulario.sector.options[formulario.sector.selectedIndex].value == "0")
    {
    alert("Por favor, escoger un sector");
    formulario.sector.focus(); 
	return false;
    }
	
	return true;
}

//Operador
//3.- Validar campos en blanco de archivo "ingresar_tipo_delito.php".

function validarForm3_2_1(formulario)
{
	if(formulario.codigo.value.length==0) { 
    formulario.codigo.focus();
    alert('Por favor ingrese codigo');
    return false;
	}
	
	if(formulario.delito.value.length==0) { 
    formulario.delito.focus();
    alert('Por favor ingrese nombre del delito');
    return false;
	}
	
	if(formulario.descripcion.value.length==0) { 
    formulario.descripcion.focus();
    alert('Por favor ingrese una descripcion');
    return false;
	}
	
	return true;
}


//Operador
//4.- Validar campos en blanco de archivo "consulta_antecedentes.php".


function validarForm3_3_1(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese un rut');
    return false;
	}
	
	return true;
}


//Operador
//5.- Validar campos en blanco de archivo "consulta_control.php".


function validarForm3_3_2(formulario)
{
	if(formulario.rut.value.length==0 || formulario.digito.value.length==0) { 
    formulario.rut.focus();
    alert('Por favor ingrese un rut');
    return false;
	}
	
	return true;
}

////////////////////////////////////////////////////////////////////

function validar_DV(T,dv1){var M=0,S=1;for(;T;T=Math.floor(T/10))
S=(S+T%10*(9-M++%6))%11;
dvv=S?S-1:'k';
if (dvv==dv1)
{
  return true;
}
else{
    alert('Error Rut');
    return false;
}
}