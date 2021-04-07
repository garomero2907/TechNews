$("#formularioRegistro").validate({
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
        pais: {
            required: true,
        },
        password: {
            required: true,
            minlength: 8,
        },
        cpassword: {
            required: true,
            minlength: 8,
            equalTo: "#password"
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
            required: "Por favor ingresa tu correo electrónico o email",
            email: "El formato de email es incorrecto"
        },
        pais:{
            required: "Seleccione su país de recidencia"
        },
        password:{
            required: "Por favor escriba una contraseña",
            minlength: "La contraseña debe tener mas de 8 dígitos"
        },
        cpassword:{
            required: "Por favor vuelva a escribir su contraseña",
            minlength: "La contraseña debe tener mas de 8 dígitos",
            equalTo: "La contraseña debe ser igual a la anterior"
        },
    }
})

$("#guardar").click(function(){
    let nombre = $("#nombre").val()
    let apellido = $("#apellido").val()
    let email = $("#email").val()
    let pais = $("#pais").val()
    let contraceña = $("#password").val()
    let confContraceña = $("#cpassword").val()
})