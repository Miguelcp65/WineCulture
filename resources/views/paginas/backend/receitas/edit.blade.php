@extends ('layouts.backend.admin')
@section('title', 'Receita')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <a class="backurl" href="{{ url()->previous() }}">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
    </a>
    <form action="{{route('receitas.update', $receita->id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      @method('PUT')
      @if (session('status'))
      <div class=”alert alert-success”>
        <strong>{{ session('status') }}</strong>
      </div>
      @endif
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome da Receita</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nome">{{$receita->nome}}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" id="exampleFormControlSelect1"  name="id_categoria">
            <option value="">Selecione uma Categoria</option>
            @foreach ($category_wines as $category_wine)
            <option @if ($receita->id_categoria==$category_wine->id) selected @endif value="{{$category_wine->id}}">{{$category_wine->nome}}</option>
            @endforeach
        </select>
    </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{now()}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao">{{$receita->descricao}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Ingredientes</label>
        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"
            name="ingre">{{ old('preparo', $receita->ingre) }}</textarea>
    </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Receita</label>
        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"
            name="preparo">{{ old('preparo', $receita->preparo) }}</textarea>
    </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
      </div>
      <button type="submit" class="btn btn-success display-4">Submeter</button>
    </form>
  </div>
</div>


@endsection
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

</script>
