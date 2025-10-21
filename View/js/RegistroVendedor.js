function ConsultarNombre()
{
    let identificacion = document.getElementById("Cedula").value;
    document.getElementById("Nombre").value = "";

    if(identificacion.length >= 9)
    {
        $.ajax({
            type: 'GET',
            url: 'https://apis.gometa.org/cedulas/' + identificacion,
            dataType: 'json',
            success: function(data){
                if(data.resultcount > 0)
                {
                    document.getElementById("Nombre").value = data.nombre;
                }
            }
        });
    }    
}

$(function () {

    $("#formRegistroVendedor").validate({
        rules: {
            Cedula: {
                required: true
            },
            Nombre: {
                required: true
            },
            CorreoElectronico: {
                required: true
            },
        },
        messages: {
            Cedula: {
                required: "* Requerido"
            },
            Nombre: {
                required: "* Requerido"
            },
            CorreoElectronico: {
                required: "* Requerido"
            },
        }
    });

});