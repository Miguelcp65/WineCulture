var categoryContent = [];
for (var i = 0; i < vinhos.length; i++) {
    categoryContent.push({
        category: 'Vinhos',
        title: vinhos[i]
    })
}

for (var i = 0; i < vinhos_classificacoes.length; i++) {
    categoryContent.push({
        category: 'Classificação',
        title: vinhos_classificacoes[i]
    })
}
for (var i = 0; i < vinhos_categorias.length; i++) {
    categoryContent.push({
        category: 'Categoria',
        title: vinhos_categorias[i]
    })
}
for (var i = 0; i < vinhos_regioes.length; i++) {
    categoryContent.push({
        category: 'Região',
        title: vinhos_regioes[i]
    })
}
for (var i = 0; i < vinhos_produtores.length; i++) {
    categoryContent.push({
        category: 'Produtor',
        title: vinhos_produtores[i]
    })
}
$('.ui.search')
    .search({

        type: 'category',
        source: categoryContent,
        fullTextSearch: false,
        clearable: true,
        error: {
            source: 'Sem Resultados',
            noResults: 'Sem Resultados'
        }
    })
$('.ui.slider.qnt_cl')
    .slider({
        min: 1,
        max: 150,
        start: 1,
        end: 150,
        step: 1,
        smooth: true,
        onChange: function () {

            var valmin = $(this).slider('get thumb value');
            var valmax = $(this).slider('get thumb value', 'second');
            $('.qntclvals1').val(valmin)
            $('.qntclvals2').val(valmax)
            $('.ui.slider.qnt_cl').trigger("change");
        }
    });


$(document).on('click', '#sidebar', function () {
    $('.filtrosmain').css("display", "inline")
    $('#fecharside').css("display", "inline")
});
$(document).on('click', '#fecharside', function () {
    $('.filtrosmain').css("display", "none")
    $('#fecharside').css("display", "none")
    
});
$('.ui.slider.per_alc')
    .slider({
        min: 1,
        max: 100,
        start: 1,
        end: 100,
        step: 1,
        smooth: true,
        onChange: function () {
            var valmin = $(this).slider('get thumb value');
            var valmax = $(this).slider('get thumb value', 'second');
            $('.per_alcvals1').val(valmin)
            $('.per_alcvals2').val(valmax)
            $('.ui.slider.per_alc').trigger("change");
        }
    });

$(document).on('change', '.qnt_cl', function () {
    qnt1 = $('.qntclvals1').val()
    qnt2 = $('.qntclvals2').val()
    var limites = $('.columnvinho');
    limites.each(function () {
        if (limites.data("qntcl") >= qnt1 && limites.data("qntcl") <= qnt2) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });

});
$(document).on('change', '.per_alc', function () {
    qntper1 = $('.per_alcvals1').val()
    qntper2 = $('.per_alcvals2').val()
    var limitesper = $('.columnvinho');
    limitesper.each(function () {
        if (limitesper.data("peral") >= qntper1 && limitesper.data("peral") <= qntper2 == true) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });

});
$('.qntclvals1').val(1)
$('.qntclvals2').val(150)

$('.per_alcvals1').val(1)
$('.per_alcvals2').val(100)

$('.imgbtndown')
    .popup({});
$('.imgbtnright')
    .popup({});
$('.ordenacao')
    .popup({});
$('#refreshvinhos')
    .popup({});
$('.pesquisaricon')
    .popup({});
$(".reporfiltros").hide();
$('.ui.accordion')
    .accordion({
        exclusive: false
    });
$('.ui.dropdown')
    .dropdown();
$('.ui.checkbox')
    .checkbox();
$('.ui.rating.vinhosclass')
    .rating();
$(document).on("click", ".direita", function () {
    var id_vinho = $(this).parent().parent().find("#id_vinho").val();
    $('.shapeimgs' + id_vinho).shape('flip right');
})
$(document).on("click", ".baixo", function () {
    var id_vinho = $(this).parent().parent().find("#id_vinho").val();
    $('.shapedetalhes' + id_vinho).shape('flip down');
})

$(document).on('click', '.deletefiltro', function () {
    var sections = $('.columnvinho');
    $('.categoriacheckb').val($(this).is(':checked'));
    var checked = $(".filtroschecks :checkbox:checked");
    var classcat = "#categoria";
    var eliminarcat = $(this).attr("id");
    var eliminarcategorias = classcat.concat(eliminarcat);
    $(eliminarcategorias).detach();
    var idd = "#";
    var deletecatt = idd.concat(eliminarcat);
    $(deletecatt).prop("checked", false);
    var checked = $(".filtroschecks :checkbox:checked");
    if (checked.length) {
        sections.hide();
        checked.each(function () {
            $("." + $(this).attr("name")).show("fast", function showNext() {
                $("." + $(this).attr("name")).show("fast", showNext);
            });
        });
    } else {
        $(".reporfiltros").hide();
        sections.show("fast", function showPrevious() {
            $(this).next("div").show("fast", showPrevious);

        });
    }
});
$(document).on("click", ".reporfiltros", function () {
    $(".selectfiltros").detach();
    $(".reporfiltros").hide();
    $('.columnvinho').show("fast", function showPrevious() {
        $(this).next("div").show("fast", showPrevious);
    });

    $(".categoriacheckb").prop("checked", false);
});
$(document).on("change", ".categoriacheckb", function () {

    var checked = $(".filtroschecks :checkbox:checked");
    var sections = $('.columnvinho');
    if (checked.length) {
        sections.hide();
        $(".reporfiltros").show();

        checked.each(function () {

            $("." + $(this).attr("name")).show("fast", function showNext() {
                $("." + $(this).attr("name")).show("fast", showNext);
            });
        });

    } else {
        $(".reporfiltros").hide();
        sections.show("fast", function showPrevious() {
            $(this).next("div").show("fast", showPrevious);
        });
    }
    if ($(this).is(":checked")) {
        var addcategoriasfiltro = ($(this).attr("id"))
        $(".itemfiltros").append('<a id="categoria' + addcategoriasfiltro + '" class="ui image label selectfiltros">' + addcategoriasfiltro + '<i id="' + addcategoriasfiltro + '" class="delete icon deletefiltro"></i></a>');
    } else {
        var classcat = "#categoria";
        var dacategoriasfiltro = $(this).attr("id");
        var delacategoriasfiltro = classcat.concat(dacategoriasfiltro);
        $(delacategoriasfiltro).detach();
    }
});


$("#intpesquisa").on("change paste keyup", function () {
    var input = document.getElementById("intpesquisa");
    input = input.value.toLowerCase();
    var divs = document.getElementsByClassName('columnvinho');
    for (i = 0; i < divs.length; i++) {
        if (divs[i].innerText.toLowerCase().includes(input)) {
            divs[i].style.display = "inline-block";
        } else {
            divs[i].style.display = "none";
        }
    }
    var valThis = $(this).val().toLowerCase();
    $('input[type=checkbox]').each(function () {
        var text = $(this).attr('id').toLowerCase();
        (text.indexOf(valThis) == 0) ? $(this).prop("checked", true): $(this).prop("checked", false);
        if (valThis == "") {
            $('input[type=checkbox]').prop("checked", false)
        }
    });
    $('input[type=search]').on('search', function () {
        $('input[type=checkbox]').prop("checked", false)
    });
});
// Search clear button

$(document).on("click", ".pesquisaricon", function () {
    var input = document.getElementById("intpesquisa");
    input = input.value.toLowerCase();
    var divs = document.getElementsByClassName('columnvinho');

    for (i = 0; i < divs.length; i++) {
        if (divs[i].innerText.toLowerCase().includes(input)) {
            divs[i].style.display = "inline-block";
        } else {
            divs[i].style.display = "none";
        }
    }
});

$(window).on('load', function () {
    $(".listavinhos").css("animation", "0.8s ease-in-out 0s 1 listavinhos")
    $(".banner").css("animation", "0.8s ease-in-out 0s 1 banner")
    $(".maincontainer").css("animation", "0.8s ease-in-out 0s 1 maincontainer")
    $(".filtrosmain").css("animation", "0.8s ease-in-out 0s 1 filtrosmain")
});
