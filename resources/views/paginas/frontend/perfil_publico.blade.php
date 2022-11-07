@extends("paginas.frontend.layout")

@section('title', 'Perfil Público')

@section("links")
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/perfil_publico.css') }}">
@endsection

@section("content")
<header class="header-left">
    <img src="{{ URL::asset('assets/img/paginas/frontend/perfil_publico/back.jpg') }}" alt="Banner">
</header>
<main>
    <div class="ui grid bread">
        <div class="row rowperfil">
            <div class="left">
                <div class="photo-left">
                    @if ($user_perfil->img == "Sem Imagem")
                    <img src="{{asset('storage/users/sem_imagem.jpg') }}" class="photo" alt="{{$user_perfil->name}} {{$user_perfil->apelido}}">
                    @else
                    <img src="{{asset('storage/users/'.$user_perfil->img) }}" class="photo" alt="{{$user_perfil->name}} {{$user_perfil->apelido}}">
                    @endif
                </div>
                <h4 class="name">{{$user_perfil->name}} {{$user_perfil->apelido}}</h4>
                <p class="info"></p>
                <p class="info">{{$user_perfil->email}}</p>
                <div class="stats row">
                    <div class="stat col-xs-4" style="padding-right: 50px;">
                        <p class="number-stat">{{$userreceitascount}}</p>
                        <p class="desc-stat">Receitas</p>
                    </div>
                    <div class="stat col-xs-4">
                        <p class="number-stat">{{$userblogcount}}</p>
                        <p class="desc-stat">Notícias</p>
                    </div>
                </div>
            </div>

            <div class="right">
                @if (count($array) > 0)
                <section class="timeline">
                    <div class="container">
                        <section class="timeline">
                            <div class="container">

                                @foreach ($array as $key=>$item)
                                <div class="timeline-item" endif>
                                    <div class="timeline-img"></div>
                                    @if ((++$key % 2) == 0)
                                    <div class="timeline-content timeline-card  js--fadeInRight">
                                        @else
                                        <div class="timeline-content timeline-card  js--fadeInLeft">
                                            @endif
                                            <div class="timeline-img-header" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .4)), url({{asset($item->img)}}) center center no-repeat;background-size: cover;">
                                                <h2>{{$item->titulo}}</h2>
                                            </div>
                                            <div class="date">{{ date('d-m-Y', strtotime($item->created_at))}}</div>
                                            <p>{{$item->desc}}</p>
                                            @if ($item->tabela == "vinhos")
                                            <a class="bnt-more" href="{{route('vinho',['vinho'=>$item->id] )}}">Ver</a>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                        </section>
                    </div>
                </section>
                @else
                <p class="sematividade">Sem Atividade no Website</p>
                @endif
            </div>

</main>
</div>
@endsection
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/perfil_publico.js') }}"></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
@endsection