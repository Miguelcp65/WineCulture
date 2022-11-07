@extends ('layouts.backend.admin')
@section('title', 'Vinhos')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <a class="backurl" href="{{ url()->previous() }}">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
    </a>
    <br>
      @if (session('status'))
      <div class="alert alert-success">
        <strong>{{ session('status') }}</strong>
      </div>
      @endif

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome do vinho</label>
        <input type="text" readonly class="form-control" id="exampleFormControlTextarea1" name="nome" value="{{$vinho->nome}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea2">Produtor</label>
        @foreach($users as $key => $user)
          @if ($vinho->id_produtor == $user->id)
            <input type="text" readonly class="form-control" id="exampleFormControlTextarea2" name="id_produtor" value="{{$user->name}} {{$user->apelido}}">
          @endif
        @endforeach
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea3">Categoria</label>
        @foreach($categorias as $key => $categoria)
          @if ($vinho->id_categoria == $categoria->id)
            <input type="text" readonly class="form-control" id="exampleFormControlTextarea3" name="id_categoria" value="{{$categoria->nome}}">
          @endif
        @endforeach
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea readonly class="ckeditor form-control" id="exampleFormControlTextarea1" rows="6" name="descricao">{{$vinho->descricao}}</textarea>
      </div>

      <div class="form-row">

        <div class="col-md-4 mb-2">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Região</label>
          <input type="text" readonly class="form-control" name="regiao" value="{{$vinho->regiao}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Quantidade Cilindrica</label>
          <input type="number" readonly class="form-control" name="qnt_cl" value="{{$vinho->qnt_cl}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Percentagem Álcool</label>
          <input type="number" readonly class="form-control" name="perct_alco" value="{{$vinho->perct_alco}}">
        </div>
        </div>

      </div>
      <a href="{{ route('vinhos.edit', $vinho) }}" class="btn btn-xs btn-warning btn-p">Editar Vinho</a>
  </div>
</div>

  @endsection
