function enviarPeticion(clase, metodo, parametros, callback){
	$.ajax({
        url: 'libs/Route.php',
        type: 'POST',
        data: {
            clase: clase,
            metodo: metodo,
            parametros: parametros
        },
        dataType: 'json',
        success: function(respuesta){
        	if(respuesta.ejecuto){
            	callback(respuesta)
            }else{
            	console.log(respuesta.msg)
            }
        }
    })
}

function parsearFormulario(formulario){
    let datosFormulario = $(formulario).serializeArray()    
    let datos = {}
    for(let i = 0; i < datosFormulario.length; i++){
        datos[datosFormulario[i].name] = datosFormulario[i].value
    }
    return datos
}