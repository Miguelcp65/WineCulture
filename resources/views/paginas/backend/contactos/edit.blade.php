@extends ('layouts.backend.admin')
@section('title', 'Contactos')

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
                <label for="formGroupExampleInput">Nome</label>
                <input readonly class="form-control" type="text" class="form-control" name="nome" id="formGroupExampleInput"
                    value="{{ $mensagem->name }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect">Assunto</label>
                <input readonly class="form-control" class="form-control" id="exampleFormControlSelect" name="assunto"
                    value="{{ $mensagem->assunto }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Estado</label>
                <input readonly class="form-control" class="form-control" id="exampleFormControlSelect2" name="estado"
                    value="{{ $mensagem->estado }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea readonly class="form-control" style="height:140px" id="exampleFormControlTextarea1" rows="3"
                    value="" name="resposta1">{{ $mensagem->mensagem }}</textarea>
            </div>
            <div class="form-group">
                <button type="button" id="btncollapse" class="btn btn-xs btn-warning btn-p first" data-toggle="collapse"
                    data-target="#collapseExample">Responder a Mensagem</button>
            </div>
            <form method="POST" action="{{ route('contactos.update', $mensagem) }}">
                @csrf
                @method('PATCH')
                <div class="collapse" id="collapseExample">
                    <div class="form-group">
                        <textarea id="" class="ckeditor form-control" id="exampleFormControlTextarea2" rows="5" value=""
                            name="resposta"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-xs btn-warning btn-p second">Submeter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $("#btncollapse").click(function() {
            $("html, body").animate({
                scrollTop: $(document).height()
            }, 1000);
        });

    </script>



    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

    </script>

@endsection
