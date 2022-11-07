@extends ('layouts.backend.admin')
@section('title', 'Receita')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <a class="backurl" href="{{ url()->previous() }}">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
    </a>
    <br>
      @if (session('status'))
      <div class=”alert alert-success”>
        <strong>{{ session('status') }}</strong>
      </div>
      @endif

      <div class="form-group">
        <label for="formGroupExampleInput">Nome da Receita</label>
        <input type="text" readonly class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome da Receita" value="{{$receita->nome}}">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Utilizador</label>
        <input type="text" readonly class="form-control" name="user" id="formGroupExampleInput" placeholder="Utilizador" value="{{$receita->user->name}} {{$receita->user->apelido}}">
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data de Criação</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$receita->created_at}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <input type="text" readonly class="form-control" name="categoria" id="formGroupExampleInput" placeholder="Utilizador" value="{{$receita->categoria->nome}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="descricao">{{$receita->descricao}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Receita</label>
        <textarea class="ckeditor form-control" readonly id="exampleFormControlTextarea1" rows="3" name="descricao">{{$receita->ingre}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Receita</label>
        <textarea class="ckeditor form-control" readonly id="exampleFormControlTextarea1" rows="3" name="descricao">{{$receita->preparo}}</textarea>
      </div>
  </div>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

</script>
  @endsection
