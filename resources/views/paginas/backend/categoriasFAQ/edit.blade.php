@extends ('layouts.backend.admin')
@section('title', 'Categorias FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <a class="backurl" href="{{ url()->previous() }}">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar</span>
            </a>
            <h2>Editar Categoria</h2>
            <br>
            <form action="{{ route('categoriasFAQ.update', $categoria) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="formGroupExampleInput">Pergunta</label>
                    <input type="text" class="form-control" name="categoria" id="formGroupExampleInput"
                        value="{{ old('categoria', $categoria->categoria) }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <input class="form-control" id="exampleFormControlSelect1" name="descricao"
                        value="{{ old('descricao', $categoria->descricao) }}">
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>
@endsection
