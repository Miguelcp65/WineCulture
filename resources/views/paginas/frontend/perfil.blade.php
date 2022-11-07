@extends("paginas.frontend.layout")

@section('title', 'Perfil')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/perfil.css') }}">
@endsection

@section("content")
<div class="main-content">

    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10 mt-5">
                    <h1 class="display-2 text-white">Olá {{Auth::user()->name}}</h1>
                    <p class="text-white mt-0 mb-5">Este é o seu perfil. Aqui pode consultar os seus dados pessoais.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    @if (Auth::user()->img == "Sem Imagem")
                                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle" alt="{{Auth::user()->name}} {{Auth::user()->apelido}}">
                                    @else
                                    <img src="\storage\users\{{Auth::user()->img}}" class="rounded" alt="{{Auth::user()->name}} {{Auth::user()->apelido}}">
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">{{$blogs}}</span>
                                        <span class="description">Blogs</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{$receitas}}</span>
                                        <span class="description">Receitas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{Auth::user()->name}} {{Auth::user()->apelido}}<span class="font-weight-light"></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{Auth::user()->pais}}
                            </div>
                            <hr class="my-4">
                            <p>Membro desde: {{Auth::user()->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h1 class="mb-0">A sua conta</h1>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('users.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <h6 class="heading-small text-muted mb-4">Informação do Utilizador</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email</label>
                                            <input type="email" id="input-email" class="form-control form-control-alternative" readonly value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-nome">Nome</label>
                                            <input type="text" name="name" id="input-nome" class="form-control form-control-alternative" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-apelido">Apelido</label>
                                            <input type="text" name="apelido" id="input-apelido" class="form-control form-control-alternative" value="{{Auth::user()->apelido}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h6 class="heading-small text-muted mb-4">Outros Dados</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-nasci">Data de Nascimento</label>
                                            <input name="data_nasc" type="date" id="input-nasci" class="form-control form-control-alternative" value="{{Auth::user()->data_nasc}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="exampleFormControlFile1">Submeter Foto</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="img">
                                                <label class="custom-file-label file_label_a" for="customFile">Escolher foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-genero">Género</label>
                                            <select name="genero" class="form-control select_form" id="input-genero">
                                                <option @if (Auth::user()->genero=="Nao Revelar") selected @endif value="Nao Revelar">Não Revelar</option>
                                                <option @if (Auth::user()->genero=="Masculino") selected @endif value="Masculino">Masculino</option>
                                                <option @if (Auth::user()->genero=="Feminino") selected @endif value="Feminino">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-pais">País</label>
                                            <select name="pais" class="form-control select_form" id="input-pais">
                                                <option @if (Auth::user()->pais=="Portugal") selected @endif value="Portugal">Portugal</option>
                                                <option @if (Auth::user()->pais=="Espanha") selected @endif value="Espanha">Espanha</option>
                                                <option @if (Auth::user()->pais=="França") selected @endif value="França">França</option>
                                                <option @if (Auth::user()->pais=="Reino Unido") selected @endif value="Reino Unido">Reino Unido</option>
                                                <option @if (Auth::user()->pais=="Alemanha") selected @endif value="Alemanha">Alemanha</option>
                                                <option @if (Auth::user()->pais=="Suíça") selected @endif value="Suíça">Suíça</option>
                                                <option @if (Auth::user()->pais=="Itália") selected @endif value="Itália">Itália</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-registo">Data de Registo</label>
                                            <input type="text" id="input-registo" class="form-control form-control-alternative" readonly placeholder="{{Auth::user()->created_at}}">
                                            <br>
                                            <button type="submit" class="btn btn-info">Editar Perfil</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("javascript")
@endsection