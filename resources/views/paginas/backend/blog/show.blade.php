@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <a class="backurl" href="{{ url()->previous() }}">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
    </a>
    <h2>Ver post com ID {{$blog->id}}</h2>
    <br>
    <form action="{{route('blog.index', $blog)}}" method="POST">
      {{csrf_field()}}
      @if (session('status'))
      <div class=”alert alert-success”>
        <strong>{{ session('status') }}</strong>
      </div>
      @endif
      <div class="form-group">
        <label for="formGroupExampleInput">Nome do Post</label>
        <input type="text" readonly class="form-control" name="titulo" id="formGroupExampleInput" placeholder="Nome do Post" value="{{$blog->titulo}}">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Autor</label>
        @foreach($users as $user)
        @if ($user->id == $blog->id_user)
        <input type="text" readonly class="form-control" name="autor" id="formGroupExampleInput" placeholder="Autor" value="{{$user->name}} {{$user->apelido}}">
        @endif
        @endforeach
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$blog->data}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        @foreach($categories as $categorie)
        @if ($categorie->id == $blog->id_categoria)
        <input class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="categoria" value="{{$categorie->name}}"></input>
        @endif
        @endforeach

      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Introdução</label>
        <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="preview">{{$blog->preview}}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Corpo da Post</label>
        <textarea readonly class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3" name="descricao">{{$blog->descricao}}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
      </div>

    </form>


    <a style="float:left; margin-right:10px" href="{{ route('blog.edit', $blog) }}" class="btn btn-primary">Editar</a>



    @csrf
    @method("DELETE")

    <form action="{{ route('blog.destroy', $blog) }}" method="post">
      @method('DELETE')
      @csrf
      <input class="btn btn-danger" type="submit" value="Delete" />
    </form>



  </div>


  @endsection
