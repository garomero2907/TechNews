$("#formularioComentarios").validate({
    rules: {
        nombre: {
            required: true,
            minlength: 3,
            maxlength: 30
        },
        apellido: {
            required: true,
            minlength: 4,
            maxlength: 30
        },
        email: {
            required: true,
            email: true
        },
        coment: {
            required: true,
            minlength: 5,
            maxlength: 200
        },
    },
    messages: {
        nombre:{
            required: "Por favor ingresa tus nombres completos",
            minlength: "Tu nombre debe ser de mas de 3 caracteres",
            maxlength: "Solo se aceptan 30 caracteres"
        },
        apellido:{
            required: "Por favor ingresa tus apellidos completos",
            minlength: "Tu apellido debe ser de mas de 4 caracteres",
            maxlength: "Solo se aceptan 30 caracteres"
        },
        email:{
            required: "Por favor ingrese su correo electrónico o email",
            email: "El formato de email es incorrecto"
        },
        coment:{
            required: "Escriba su comentario por favor",
            minlength: "Su comentario debe tener mas de 5 caracteres",
            maxlength: "Solo se aceptan 200 caracteres"
        },
    }
})

$("#enviar").click(function(){
    let nombre = $("#nombre").val()
    let apellido = $("#apellido").val()
    let email = $("#email").val()
    let comentario = $("#coment").val()
})