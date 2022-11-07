@extends("paginas.frontend.layout")

@section('title', $blog->titulo)

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/previewblog.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
@endsection

@section("content")

<div class="all">
    <div class="ui grid">
        <div class="ui large breadcrumb">
            <a class="section" href="/blog">Notícias</a>
            <i class="right chevron icon divider"></i>
            <a class="section" style="text-decoration: underline">{{$blog->titulo}}</a>
        </div>
    </div>
    <img class="class2" src="{{ url('storage/blog/' .$blog->img)}}"></img>
    <div class="text">
        <h1>{{$blog->titulo}}</h1>
        <p>Publicado por <em><a href="{{ route('perfil_publico', $blog->user) }}">{{$blog->user->name}}</a></em> | Publicado em <em>{{ date('d-m-Y', strtotime($blog->created_at))}}</em> ás <em>{{ date('H:m', strtotime($blog->created_at))}}</em></p>
        <br><p><big><strong>{{$blog->preview}}</strong></big></p><br>
        {!!$blog->descricao!!}
    </div>
    <div style="text-align: center;">
        <a href="/blog" role="button" class="botao12">Voltar á Página Inicial</a>
    </div>
</div>
<br>
<br>
<br>

@endsection
