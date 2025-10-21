$(function () {

    $("#formRegistro").validate({
        rules: {
            Vendedor: {
                required: true
            },
            Marca: {
                required: true
            },
            Modelo: {
                required: true
            },
            Color: {
                required: true
            },
            Precio: {
                required: true
            }
        },
        messages: {
            Vendedor: {
                required: "* Requerido"
            },
            Marca: {
                required: "* Requerido"
            },
            Modelo: {
                required: "* Requerido"
            },
            Color: {
                required: "* Requerido"
            },
            Precio: {
                required: "* Requerido"
            }
        }
    });

});