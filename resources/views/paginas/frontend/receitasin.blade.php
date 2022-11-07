@extends("paginas.frontend.layout")

@section('title', 'receitasin')

@section('links')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/receitasin.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="{{asset('storage/receitas/'.$receita->foto) }}"></div>
                                <p class="product-description">{!! $receita->ingre !!}</p>
                            </div>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ $receita->nome }}</h3>
                            <p class="product-description">{{ $receita->descricao }}</p>
                            <p class="product-description">{!! $receita->preparo !!}</p>
                            </p>
                            <div class="action">
                                <a href="{{ route('receitas') }}"><button class="add-to-cart btn btn-default"
                                        type="button">Voltar</button></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
