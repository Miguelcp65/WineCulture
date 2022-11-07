@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">

        <div class="content">
            <a class="backurl" href="{{ url()->previous() }}">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar</span>
            </a>
            <h2>Pergunta</h2>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput">Pergunta</label>
                <input readonly class="form-control" type="text" class="form-control" name="pergunta"
                    id="formGroupExampleInput" value="{{ $pergunta->pergunta }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <input readonly class="form-control" class="form-control" id="exampleFormControlSelect1" name="categoria"
                    value="{{ $pergunta->categoria->categoria }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Resposta</label>
                <label readonly class="form-control" style="height:200px" id="exampleFormControlTextarea1" value=""
                    name="resposta">{!! $pergunta->resposta !!}</label>
            </div>
            <a href="{{ route('faq.edit', $pergunta) }}" class="btn btn-xs btn-warning btn-p">Editar Pergunta</a>
        </div>
    </div>
@endsection
