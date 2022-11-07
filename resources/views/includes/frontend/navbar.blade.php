<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">

                    <a class="navbar-brand" href="{{ route('index') }}"><img
                            src="{{ asset('assets\img\logos\wineculture_logo_lightmode.png') }}" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 @if (Route::currentRouteName()=='index' ) active @endif">
                                <a class="nav-link" href="{{ route('index') }}">Início</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Vinho</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('sobre_vinhos') }}">Sobre Vinhos</a>
                                    <a class="dropdown-item" href="{{ route('vinhos') }}">Tipos de Vinhos</a>
                                </div>
                        </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 @if (Route::currentRouteName()=='receitas' ) active @endif">
                                <a class="nav-link" href="{{ route('receitas') }}">Receitas</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 @if (Route::currentRouteName()=='index_blog_frontend' ) active @endif">
                                <a class="nav-link" href="{{ route('index_blog_frontend') }}">Notícias</a>
                            </li>
                            <li class=" nav-item pl-4 pl-md-0 ml-0 ml-md-4 @if (Route::currentRouteName()=='sobre' ) active @endif">
                                <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 @if (Route::currentRouteName()=='contactos' ) active @endif">
                                <a class="nav-link" href="{{ route('contactos') }}">Contactos</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" target="_blank" href="http://wineculture.test">Loja</a>
                            </li>
                            @if (!Auth::check())
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>@elseif (Auth::user()->tipouser=="Administrador")
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" class="nav-link"
                                        href="{{ route('admin_dashboard') }}">Admin</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    $('.boundary.example.button.popupvinhosnav')
        .popup({
            boundary: '.boundary.example .segment'
        });

</script>
