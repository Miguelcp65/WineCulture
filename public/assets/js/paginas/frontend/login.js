
$(".log-in").click(function () {
    $(".signIn").addClass("active-dx");
    $(".signUp").addClass("inactive-sx");
    $(".signUp").removeClass("active-sx");
    $(".signIn").removeClass("inactive-dx");
});


$("#signinemail").focus(function () {
    $('#signinemail').attr('placeholder', '');
});
$("#signinemail").blur(function () {
    $('#signinemail').attr('placeholder', '\uf0e0  Email');
})

$("#signinpassword").focus(function () {
    $('#signinpassword').attr('placeholder', '');
});
$("#signinpassword").blur(function () {
    $('#signinpassword').attr('placeholder', '\uf023  Password');
})

$("#signupnome").focus(function () {
    $('#signupnome').attr('placeholder', '');
});
$("#signupnome").blur(function () {
    $('#signupnome').attr('placeholder', '\uf007 Nome');
})

$("#signupapelido").focus(function () {
    $('#signupapelido').attr('placeholder', '');
});
$("#signupapelido").blur(function () {
    $('#signupapelido').attr('placeholder', '\uf007  Apelido');
})

$("#signupemail").focus(function () {
    $('#signupemail').attr('placeholder', '');
});
$("#signupemail").blur(function () {
    $('#signupemail').attr('placeholder', '\uf0e0  Email');
})


$("#signuppassword").focus(function () {
    $('#signuppassword').attr('placeholder', '');
});
$("#signuppassword").blur(function () {
    $('#signuppassword').attr('placeholder', '\uf023  Password');
})


$("#signupcpassword").focus(function () {
    $('#signupcpassword').attr('placeholder', '');
});
$("#signupcpassword").blur(function () {
    $('#signupcpassword').attr('placeholder', '\uf023  Confirmar Password');
})




$(".back").click(function () {
    $(".signUp").addClass("active-sx");
    $(".signIn").addClass("inactive-dx");
    $(".signIn").removeClass("active-dx");
    $(".signUp").removeClass("inactive-sx");
});
var p_c = $('#signupcpassword');
var p = $('#signuppassword');
if (p.val() != p_c.val()) {
    $('#registar').attr("disabled", true);
} else {
    $('#registar').attr("disabled", false);
}
$('.password').on('keyup', function () {
    if (p.val().length > 0) {
        if (p.val() != p_c.val()) {
            $('#valid').html("As Passwords não coincidem!");
            $('#registar').attr("disabled", true);
        } else {
            $('#valid').html('');
            $('#registar').attr("disabled", false);
        }
        var s = 'Fraca'
        if (p.val().length > 5 && p.val().match(/\d+/g))
            s = 'Média';
        if (p.val().length > 6 && p.val().match(/[^\w\s]/gi))
            s = 'Forte';
        $('#strong span').addClass(s).html(s);
    }
});
