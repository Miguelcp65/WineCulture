$("#campoAssunto").focus(function () {
    $('#campoAssunto').attr('placeholder', '');
});
$("#campoAssunto").blur(function () {
    $('#campoAssunto').attr('placeholder', '\uf02d  Assunto');
})

$("#campoNome").focus(function () {
    $('#campoNome').attr('placeholder', '');
});
$("#campoNome").blur(function () {
    $('#campoNome').attr('placeholder', '\uf007  Nome');
})

$("#campoEmail").focus(function () {
    $('#campoEmail').attr('placeholder', '');
});
$("#campoEmail").blur(function () {
    $('#campoEmail').attr('placeholder', '\uf1fa Email');
})

$("#campoMensagem").focus(function () {
    $('#campoMensagem').attr('placeholder', '');
});
$("#campoMensagem").blur(function () {
    $('#campoMensagem').attr('placeholder', '\uf0e0  Mensagem');
})
