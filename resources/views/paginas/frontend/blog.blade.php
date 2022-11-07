@extends("paginas.frontend.layout")

@section('title', 'Blog')

@section("links")

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">
@endsection

@section("content")
<div class="banner">
    <img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/blog/blogback.jpg') }}" alt="banner">
</div>
<div class="ui grid bread">
	<div class="ui large breadcrumb">
		<a  href="{{route('index')}}" class="section">Início</a>
		<i class="right chevron icon divider"></i>
		<div class="active section">Notícias</div>
	</div>
</div>
<div class="row">
    <div class="ui basic modal acarregar">
        <div class="ui icon header">
            <div style="width: 250px;" class="ui active slow green double loader"><br><br>
                A Carregar Lista Posts</div>
        </div>
    </div>
    <div class="ui basic modal aordenar">
        <div class="ui icon header">
            <div style="width: 250px;" class="ui active slow green double loader"><br><br>
                A Ordenar Lista Posts</div>
        </div>
    </div>
</div>
<div class="ui grid maincontainer">
    <div class="row">
        <div class="sixteen wide column vinhosheader">
            <div class="ui attached stackable menu semiheader">
                <div class="ui container headercontainer">
                    <a class="item">
                        {{$blogtotall}} Notícias encontradas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="containerr">
        <div class="card-column column-0">
            @foreach($blogs as $value)
            <div class="card card-color-0">
                <input type="hidden" name="id" value="{{$value->id}}">
                <img src="{{ url('storage/blog/' .$value->img)}}" />
                <div style="display: none;" id="text{{$value->id}}">

                    <h1 id="titulo">{{$value->titulo}}</h1>
                    <p id="data">{{$value->created_at}}</p>
                    <div class="autor" id="autor">
                        <img src="http://wineculture.test/wp-content/uploads/2020/10/banner5.jpg" /><span class="nome">
                            @foreach($users as $user)
                            @if ($user->id == $value->id_user)
                            {{$user->name}}</span><span>{{$user->apelido}}</span>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="texto"><br>
                    <h2 id="texto_titulo" class="tituloh1" class="info">{{$value->titulo}}
                        <span class="categoria">
                            @foreach($categorias as $categoria)
                            @if ($categoria->id == $value->id_categoria)
                            {{$categoria->name}}
                            @endif
                            @endforeach
                        </span>
                    </h2>

                    <div class="bermaiiis">
                        <a href="{{route('previewBlog',$value)}}" class="bermais">Lêr Mais</i></a>
                    </div>
                </div>
                <div class="autorblog">
                    <p>Autor: <em>{{$value->user->name}}</em> | Publicado em <em>{{ date('d/m/Y', strtotime($value->created_at))}}</em></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div id="cover" class="cover"></div>

    <div id="open-content" class="open-content">
        <a href="#" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
        <img id="open-content-image" src="">
        <div class="text" id="open-content-text"></div>
    </div>
</section>


</div>
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/blog.js') }}"></script>
@endsection
@endsection