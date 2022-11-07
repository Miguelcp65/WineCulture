@extends("paginas.frontend.layout")

@section('title', 'Receitas')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/icofont/icofont.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/index.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/receitas.css') }}">
@endsection

@section("content")
<div class="imgbanner_div">
    <img class="imgbanner" src="assets\img\paginas\frontend\receitas\banner-vinho1.jpg" alt="">
</div>

<div id="containerreceitas" class="container">
    <br>
    <div class="row portfolio">
        <div class="col-lg-12">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active filter-tudo filter-button">Todos</li>
                @foreach ($category_wines as $category_wine)
                <li class="filter-button" data-filter=".receitas-{{$category_wine->id}}">{{$category_wine->nome}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row portfolio-container">
        @foreach($receitas as $value)
        <div class="col-md-3 col-sm-6 portfolio-item receitas-{{$value->id_categoria}}">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">

                        <img class="pic-1" src=" {{asset('storage/receitas/'.$value->foto) }}">
                        <img class="pic-2" src=" {{asset('storage/receitas/'.$value->foto) }}">
                    </a>
                    <ul class="social">
                        <li><a href="{{ route('receitasin',$value) }}"><i class="fa fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$value->nome}} </a></h3>
                    <div class="desc">
                        {{$value->descricao}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection

@section("javascript")

<script src="{{asset('assets/css/paginas/frontend/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{asset('assets/css/paginas/frontend/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{asset('assets/css/paginas/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{asset('assets/js/paginas/frontend/index.js') }}"></script>

<script>
    $(document).ready(function() {
        var targets = $('.portfolio-item'),
            buttons = $('.filter-button').click(function() {
                var value = $(this).data('filter');
                if (value == "*") {
                    buttons.removeClass('filter-active');
                } else
                    $('.filter-tudo').removeClass('filter-active');

                $(this).toggleClass('filter-active');

                var checkedClasses = buttons.filter('.filter-active').toArray().map(function(btn) {
                    return $(btn).data('filter');
                }); //create array of filters

                if (checkedClasses.length === 0) {
                    $('.filter-tudo').addClass('filter-active');
                    targets.show('1000');
                } else {
                    if (value == "*") {
                        classes = "*";
                    } else {
                        var classes = checkedClasses[0];
                        for (i = 1; i < checkedClasses.length; i++) {
                            classes += "," + checkedClasses[i];
                        }
                    }

                    var selector = classes, //create selector of the combined classes

                        show = targets.filter(selector);
                    targets.hide().removeClass('aumentar');
                    show.show().addClass('aumentar');
                }
            });
    });
</script>

@endsection