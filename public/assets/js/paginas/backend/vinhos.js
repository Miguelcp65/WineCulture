jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    'locale-compare-asc': function (a, b) {
        return a.localeCompare(b, 'cs', {
            sensitivity: 'case'
        })
    },
    'locale-compare-desc': function (a, b) {
        return b.localeCompare(a, 'cs', {
            sensitivity: 'case'
        })
    }
})

jQuery.fn.dataTable.ext.type.search['locale-compare'] = function (data) {
    return NeutralizeAccent(data);
}

function NeutralizeAccent(data) {
    return !data ?
        '' :
        typeof data === 'string' ?
        data
        .replace(/\n/g, ' ')
        .replace(/[éÉěĚèêëÈÊË]/g, 'e')
        .replace(/[šŠ]/g, 's')
        .replace(/[čČçÇ]/g, 'c')
        .replace(/[řŘ]/g, 'r')
        .replace(/[žŽ]/g, 'z')
        .replace(/[ýÝ]/g, 'y')
        .replace(/[áÁâàÂÀ]/g, 'a')
        .replace(/[íÍîïÎÏ]/g, 'i')
        .replace(/[ťŤ]/g, 't')
        .replace(/[ďĎ]/g, 'd')
        .replace(/[ňŇ]/g, 'n')
        .replace(/[óÓ]/g, 'o')
        .replace(/[úÚůŮ]/g, 'u') :
        data
}
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "portugues-pre": function (data) {
        var a = 'a';
        var e = 'e';
        var i = 'i';
        var o = 'o';
        var u = 'u';
        var c = 'c';
        var special_letters = {
            "Á": a,
            "á": a,
            "Ã": a,
            "ã": a,
            "À": a,
            "à": a,
            "É": e,
            "é": e,
            "Ê": e,
            "ê": e,
            "Í": i,
            "í": i,
            "Î": i,
            "î": i,
            "Ó": o,
            "ó": o,
            "Õ": o,
            "õ": o,
            "Ô": o,
            "ô": o,
            "Ú": u,
            "ú": u,
            "Ü": u,
            "ü": u,
            "ç": c,
            "Ç": c
        };
        for (var val in special_letters)
            data = data.split(val).join(special_letters[val]).toLowerCase();
        return data;
    },
    "portugues-asc": function (a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
    "portugues-desc": function (a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
});


$(document).ready(function () {
    jQuery('#datatable-table_filter input').keyup(function () {
        table
            .search(
                jQuery.fn.DataTable.ext.type.search.string(this.value)
            )
            .draw();
    });
    $(document).ready(function () {

    });
    $('#tablevinhos').dataTable({
        dom: 'lBfrtip',
        buttons: [{
                text: '<i class="fas fa-plus fa-lg"></i>',
                className: 'adicionarbtn',
                id: 'addbtn',
                action: function (e, dt, button, config) {
                    $('#addmodal').modal('show')
                }
            },
            {
                extend: 'excel',
                text: '<i class="fas fa-file-excel fa-lg"></i>',
                className: 'excelbtn',
                id: 'excelbtn',
                exportOptions: {
                    columns: [1, 2, 3, 4]
                }
            },
            {
                extend: 'pdf',
                text: '<i class="fas fa-file-pdf fa-lg"></i>',
                className: 'pdfbtn',
                id: 'pdfbtn',
                exportOptions: {
                    columns: [1, 2, 3, 4]
                }
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print fa-lg"></i>',
                className: 'printbtn',
                id: 'printbtn',
                exportOptions: {
                    columns: [1, 2, 3, 4]
                }
            }
        ],
        "scrollY": "500",
        "scrollCollapse": true,
        "searchHighlight": true,
        "mark": true,
        "autoWidth": true,
        "columns": [
            null,
            null,
            null,
            null,
            null,
            null
        ],
        "order": [
            [2, 'asc']
        ],
        "language": {
            "emptyTable": "Não existem registos a apresentar",
            "info": "A mostrar _START_ até _END_ de _TOTAL_ registos",
            "infoEmpty": "",
            "sSearch": "Procurar:",
            "paginate": {
                "next": "Próximo",
                "previous": "Anterior"
            },
            "sLengthMenu": "Mostrar _MENU_ registos",
            "infoFiltered": "(filtrado do total de _MAX_ registos)",
            "zeroRecords": "Não existem resultados baseados na pesquisa",
        },
        "columnDefs": [{
            type: 'portugues',
            targets: [0, 1, 2, 3, 4, 5]
        }],
        "columnDefs": [{
            type: 'locale-compare',
            targets: [0, 1, 2, 3, 4, 5]
        }],
    });
});

$("#tablefaq thead tr")
    .clone(true)
    .appendTo("#tablefaq thead");
$("#tablefaq thead tr:eq(1) th").each(function (i) {
    var title = $(this).text();
    $(this).html(
        '<input type="text" class="form-control form-control-sm thead' +
        title +
        '" placeholder="Pesquisar ' +
        title +
        '" />'
    );

    $("input", this).on("keyup change", function () {
        if (
            $("#tablefaq")
            .DataTable()
            .column(i)
            .search() !== this.value
        ) {
            $("#tablefaq")
                .DataTable()
                .column(i)
                .search(this.value)
                .draw();
        }
    });
});
$(document).ready(function () {
    $(".adicionarbtn").removeClass("dt-button adicionarbtn").addClass("btn btn-outline-success");
    $(".editarbtn").removeClass("dt-button editarbtn").addClass("btn btn-outline-info");
    $(".eliminarbtn").removeClass("dt-button eliminarbtn").addClass("btn btn-outline-danger");
    $(".excelbtn").removeClass("dt-button excelbtn").addClass("btn btn-outline-success");
    $(".pdfbtn").removeClass("dt-button pdfbtn").addClass("btn btn-outline-danger");
    $(".printbtn").removeClass("dt-button printbtn").addClass("btn btn-outline-dark");
});
