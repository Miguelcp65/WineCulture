@extends("paginas.frontend.layout")

@section('title', 'FAQ')

@section('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.css"
        integrity="sha512-BIyIsOFJCQKKhxrCMtXBi1RJTXmV1vuMEWCRbU/UFieuYyvGAbl03GktViTWKM39yu9Jywbec1V0cRbQ6KgMVQ=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.js"
        integrity="sha512-zy/iMxvOAQO5VsB1/enNUXKWxoSBFAyjXwwwIU+sMYf2+iOnqoW2EokpAnnTwue6/Kcv3w7qyALGbppj3mOVgA=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/faq.css') }}">
@endsection

@section('content')
    <div class="bannerrrr">
        <img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/faq-banner.jpg') }}" alt="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 perguntas main">
                    @foreach ($categorias as $categoria)
                        <a>
                            <h1 class="categoria">{{ $categoria->categoria }}</h1>
                        </a>
                        @foreach ($perguntas as $pergunta)
                            @if ($pergunta->categoria_id == $categoria->id)
                                <div class="ui styled fluid accordion perguntacontainer">
                                    <div class="title pergunta">
                                        <i class="dropdown icon"></i>
                                        {{ $pergunta->pergunta }}
                                    </div>
                                    <div class="content">
                                        <p class="transition resposta">{!! $pergunta->resposta !!}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>


        <!--SCRIPTS-->
        <script>
            $('.ui.accordion')
                .accordion();

        </script>

    @endsection
    @section('javascript')
    @endsection
