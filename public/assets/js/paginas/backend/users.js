let usersdata = [user_utl_12_total, user_utl_11_total, user_utl_10_total, user_utl_9_total, user_utl_8_total, user_utl_7_total, user_utl_6_total, user_utl_5_total, user_utl_4_total, user_utl_3_total, user_utl_2_total, user_utl_1_total];
var canvas = document.getElementById("usersgrafico");
var ctx = canvas.getContext("2d");
var gradient = ctx.createLinearGradient(0, 0, 0, 100);
gradient.addColorStop(0, 'red');
gradient.addColorStop(1, '#873740');
var monthName = new Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
var d = new Date();
d.setDate(1);
var tt = new Array();
for (i = 0; i <= 11; i++) {
    tt[i] = (monthName[d.getMonth()] + ' ' + d.getFullYear());
    d.setMonth(d.getMonth() - 1);
}
tt = tt.reverse();
Datausers = {
    labels: tt,
    datasets: [{
        label: "Registos",
        data: usersdata,
        lineTension: 0,
        backgroundColor: gradient,
        hoverBackgroundColor: gradient,
        hoverBorderWidth: 2,
        hoverBorderColor: 'black'
    }]
};

var usersbarX = document.getElementById("usersgrafico").getContext("2d");
var usersChart = new Chart(usersbarX, {
    type: "bar",
    data: Datausers,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },

        scales: {
            xAxes: [{
                gridLines: {
                    drawBorder: false,
                    display: false
                },
                ticks: {
                    display: true, // hide main x-axis line
                    beginAtZero: false
                },
                barPercentage: 4,
                categoryPercentage: 0.2
            }],
            yAxes: [{
                gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                },
                ticks: {
                    display: false,
                    beginAtZero: true
                }
            }]
        },
    }
});

let generosdata = [users_masculino_total, users_feminino_total, users_nao_revelar_total, users_genero_null_total];
Datageneros = {
    labels: [
        "Masculino",
        "Feminino",
        "Não Revelar",
        "Não Definido"
    ],
    datasets: [{
        label: "Género",
        backgroundColor: "white",
        data: generosdata,
        lineTension: 0,
        fill: 'white',
        backgroundColor: ["#009063", "#ff6f9c", "#191970", "#b7b7b7"],
    }]
};

var usersbarX = document.getElementById("generosgradfico").getContext("2d");
var usersChart = new Chart(usersbarX, {
    type: "pie",
    data: Datageneros,

    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        legend: {
            position: "bottom",
            align: "start"
        },
        scales: {
            xAxes: [{
                gridLines: {
                    drawBorder: false,
                    display: false
                },
                ticks: {
                    display: false, // hide main x-axis line
                    beginAtZero: true
                },
                barPercentage: 3,
                categoryPercentage: 0.2
            }],
            yAxes: [{
                gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                },
                ticks: {
                    display: false,
                    beginAtZero: true
                }
            }]
        },
    }
});
let paisdata = [8,15,25];
Datapais = {
    labels: [
        "França",
        "Espanha",
        "Portugal"
    ],
    datasets: [{
        label: "País",
        backgroundColor: "white",
        data: paisdata,
        lineTension: 0,
        fill: 'white',
        backgroundColor: ["#009063", "#ff6f9c", "#191970"],
    }]
};

var usersbarX = document.getElementById("paisgrafico").getContext("2d");
var usersChart = new Chart(usersbarX, {
    type: "horizontalBar",
    data: Datapais,

    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines: {
                    drawBorder: false,
                    display: true
                },
                ticks: {
                    display: true, // hide main x-axis line
                    beginAtZero: true
                },
                barPercentage: 2,
                categoryPercentage: 0.2
            }],
            yAxes: [{
                gridLines: {
                    drawBorder: true, // hide main y-axis line
                    display: false
                },
                ticks: {
                    display: false,
                    beginAtZero: true
                }
            }]
        },
    }
});
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    'locale-compare-asc': function(a, b) {
        return a.localeCompare(b, 'cs', { sensitivity: 'case' })
    },
    'locale-compare-desc': function(a, b) {
        return b.localeCompare(a, 'cs', { sensitivity: 'case' })
    }
})

jQuery.fn.dataTable.ext.type.search['locale-compare'] = function(data) {
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
    "portugues-pre": function(data) {
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
    "portugues-asc": function(a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
    "portugues-desc": function(a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
});

$(document).ready(function() {
    jQuery('#datatable-table_filter input').keyup(function() {
        table
            .search(
                jQuery.fn.DataTable.ext.type.search.string(this.value)
            )
            .draw();
    });
    $(document).ready(function() {

    });
    
$('#tableausers').dataTable({
    dom: 'lBfrtip',
    buttons: [
    {
        extend: 'excel',
        text: '<i class="fas fa-file-excel fa-lg"></i>',
        className: 'excelbtn',
        id: 'excelbtn',
        exportOptions: {
            columns: [1, 2, 3]
        }
    },
    {
        extend: 'pdf',
        text: '<i class="fas fa-file-pdf fa-lg"></i>',
        className: 'pdfbtn',
        id: 'pdfbtn',
        exportOptions: {
            columns: [1, 2, 3]
        }
    },
    {
        extend: 'print',
        text: '<i class="fas fa-print fa-lg"></i>',
        className: 'printbtn',
        id: 'printbtn',
        exportOptions: {
            columns: [1, 2, 3]
        }
    }
],
    "scrollY": "350px",
    "scrollCollapse": true,
    "orderCellsTop": true,
    "autoWidth": true,
    "searchHighlight": true,
    "mark": true,
    "columns": [
        null,
        null,
        null,
        null,
        null
    ],
    "order": [
        [1, 'asc']
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
        targets: [0, 1, 2, 3, 4],
        "targets": [0,4], "orderable": false
        
    }],
    "columnDefs": [{
        type: 'locale-compare',
        targets: [0, 1, 2, 3, 4],
        "targets": [0,4], "orderable": false
    }],
});
});

$('#tableausers thead tr').clone(true).appendTo( '#tableausers thead' );
$('#tableausers thead tr:eq(1) th').each( function (i) {
    var title = $(this).text();
    $(this).html( '<input type="text" class="form-control form-control-sm thead'+title+'" placeholder="Pesquisar '+title+'" />' );

    $( 'input', this ).on( 'keyup change', function () {
        if ( $('#tableausers').DataTable().column(i).search() !== this.value ) {
            $('#tableausers').DataTable()
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
} );
$(document).ready(function () {
    $(".editarbtn").removeClass("dt-button editarbtn").addClass("btn btn-outline-info");
    $(".eliminarbtn").removeClass("dt-button eliminarbtn").addClass("btn btn-outline-danger");
    $(".excelbtn").removeClass("dt-button excelbtn").addClass("btn btn-outline-success");
    $(".pdfbtn").removeClass("dt-button pdfbtn").addClass("btn btn-outline-danger");
    $(".printbtn").removeClass("dt-button printbtn").addClass("btn btn-outline-dark");
});
