var holder = document.querySelector(".holder");
holder.setAttribute('dir', 'one');

function toggle(val) {
    holder.setAttribute('dir', val);
}
$(".sidenav1 a").on('click', function (event) {

    $target = $(event.target);
    $(".tab").removeClass("active1");
    $target.addClass('active1');
});


$(".toggle").on('click', function (e) {
    var elem = $(this).text();
    if (elem == "Ver Mais") {
        //Stuff to do when btn is in the read more state
        $(this).text("Ver Menos");
       $(this).parent().parent().find(".ttext").slideDown();
   
    } else {
        //Stuff to do when btn is in the read less state
        $(this).text("Ver Mais");
        $(this).parent().parent().find(".ttext").slideUp();
    }
});
