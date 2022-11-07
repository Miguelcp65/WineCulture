@extends ('layouts.backend.admin')
@section('title', 'Categorias FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <a class="backurl" href="{{ url()->previous() }}">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar</span>
            </a>
            <h2>Categoria</h2>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput">Categoria</label>
                <input readonly class="form-control" type="text" class="form-control" name="pergunta"
                    id="formGroupExampleInput" value="{{  $categoria->categoria }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Descrição</label>
                <input readonly class="form-control" class="form-control" id="exampleFormControlSelect1" name="categoria"
                    value="{{ $categoria->descricao }}">
            </div>
            <a href="{{ route('categoriasFAQ.edit', $categoria) }}" class="btn btn-xs btn-warning btn-p">Editar Categoria</a>
        </div>
    </div>
@endsection
