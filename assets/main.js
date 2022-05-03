function enviarPeticion(url, datos, callback){
	$.ajax({
        url: url,
        type: 'POST',
        data: datos,
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