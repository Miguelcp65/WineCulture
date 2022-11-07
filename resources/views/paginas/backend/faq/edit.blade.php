@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <a class="backurl" href="{{ url()->previous() }}">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar</span>
            </a>
            <h2>Inserir Pergunta</h2>
            <br>
            <form action="{{ route('faq.update', $pergunta) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="formGroupExampleInput">Pergunta</label>
                    <input type="text" class="form-control" name="pergunta" id="formGroupExampleInput"
                        value="{{ old('pergunta', $pergunta->pergunta) }}">
                </div>
                <div class="form-group">
                    <label for="inputCategory">Categoria</label>
                    <select name="categoria_id" id="inputCategory" class="form-control">
                        @foreach ($categorias as $categoria)
                            <option @if (old('categoria_id',$pergunta->categoria_id) == $categoria->id) selected @endif value="{{ $categoria->id }}">
                                {{ $categoria->categoria }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resposta</label>
                    <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"
                        name="resposta">{{ old('resposta', $pergunta->resposta) }}</textarea>
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
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
