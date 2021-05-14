$("#signup").click(function() {
    $("#first").fadeOut("fast", function() {
        $("#second").fadeIn("fast");
    });
});

$("#signin").click(function() {
    $("#second").fadeOut("fast", function() {
        $("#first").fadeIn("fast");
    });
});



$(function() {
    $("form[name='login']").validate({
        rules: {

            email: {
                required: true,
                email: true
            },
            password: {
                required: true,

            }
        },
        messages: {
            email: "Por favor introduce un email valido",

            password: {
                required: "Por favor introduce la contraseña",

            }

        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});



$(function() {

    $("form[name='registration']").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },

        messages: {
            firstname: "Por favor introduce tu nombre",
            lastname: "Por favor introduce tu apellido",
            password: {
                required: "Por favor introduce una contraseña",
                minlength: "Tu contraseña debe tener al menos 6 caracteres"
            },
            email: "Por favor introduce un email valido"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});