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