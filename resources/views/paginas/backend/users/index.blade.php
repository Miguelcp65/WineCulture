@extends ('layouts.backend.admin')
@section('title', 'Dashboard')
@section('content')
    <nav aria-label="breadcrumb bread">
    <ol class="breadcrumb breadcrumb-inverse">
        <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
        <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Utilizadores</li>
    </ol>
</nav>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <!-- Doughnut Chart -->
                    <div class="card card-default">
                        <div class="card-header justify-content-center">
                            <h2>{{ $total_users_utls_12meses }} Novos Registos (Ultimos 12 Meses)</h2>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="usersgrafico" width="389" height="210" class="chartjs-render-monitor"
                                style="display: block; width: 389px; height: 275px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <!-- Doughnut Chart -->
                    <div class="card card-default">
                        <div class="card-header justify-content-center">
                            <h2>Géneros dos Utilizadores</h2>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="generosgradfico" class="chartjs-render-monitor"
                                style="display: block; width: 389px; height: 275px;"></canvas>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <!-- Doughnut Chart -->
                    <div class="card card-default">
                        <div class="card-header justify-content-center">
                            <h2>Países dos Utilizadores</h2>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="paisgrafico" class="chartjs-render-monitor"
                                style="display: block; width: 389px; height: 275px;"></canvas>
                        </div>


                    </div>
                </div>


            </div>
            <div class="row tabelas">
                <div class="col-12">
                    <div class="card card-table-border-none" id="users">
                        <div class="card-header justify-content-between">
                            <h2 id="titulotable">Tabela de Utilizadores</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="tableausers" class="ui celled table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="d-none d-lg-table-cell">Imagem</th>
                                        <th>Nome</th>
                                        <th class="d-none d-lg-table-cell">Apelido</th>
                                        <th class="d-none d-lg-table-cell">Tipo de Utilizador</th>
                                        <th class="d-none d-lg-table-cell">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($users as $key => $user)
                                            <td>
                                                @if ($user->img == 'Sem Imagem')
                                                    <img src="{{asset('storage/users/sem_imagem') }}" class="rounded-circle w-45"
                                                        alt=">{{ $user->name }} {{ $user->apelido }}">
                                                @else
                                                    <img src="{{asset('storage/users/'.$user->img) }}"
                                                        class="rounded-circle w-45"
                                                        alt=">{{ $user->name }} {{ $user->apelido }}">
                                                @endif
                                            </td>
                                            <td>
                                                <a class="text-dark" href="">{{ $user->name }}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark" href="">{{ $user->apelido }}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark" href="">{{ $user->tipouser }}</a>
                                            </td>
                                            <td class="acoes">

                                                <button type="button" class="btn btn-xs btn-danger btn-p"
                                                    data-toggle="modal" data-target="#deleteConfirmModal"
                                                    data-route="{{ route('users.destroy', $user) }}"><i
                                                        class="fas fa-trash fa-xs" data-toggle="tooltip"
                                                        data-placement="top" title="Eliminar"></i></button>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar registo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem a certeza que deseja eliminar este registo?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <form method="POST" action="#" role="form" class="inline" id="formDelete">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //triggered when modal is about to be shown
            $('#deleteConfirmModal').on('show.bs.modal', function(e) {

                //get data-route attribute of the clicked element
                var route = $(e.relatedTarget).data('route');

                //populate the textbox
                $('#formDelete').attr("action", route);
            });

        </script>
        <script>
            var user_utl_12_total = {{ $user_utl_12_total }};
            var user_utl_11_total = {{ $user_utl_11_total }};
            var user_utl_10_total = {{ $user_utl_10_total }};
            var user_utl_9_total = {{ $user_utl_9_total }};
            var user_utl_8_total = {{ $user_utl_8_total }};
            var user_utl_7_total = {{ $user_utl_7_total }};
            var user_utl_6_total = {{ $user_utl_6_total }};
            var user_utl_5_total = {{ $user_utl_5_total }};
            var user_utl_4_total = {{ $user_utl_4_total }};
            var user_utl_3_total = {{ $user_utl_3_total }};
            var user_utl_2_total = {{ $user_utl_2_total }};
            var user_utl_1_total = {{ $user_utl_1_total }};
            var users_masculino_total = {{ $users_masculino_total }};
            var users_feminino_total = {{ $users_feminino_total }};
            var users_nao_revelar_total = {{ $users_nao_revelar_total }};
            var users_genero_null_total = {{ $users_genero_null_total }};

        </script>

        <script src="{{ asset('assets\js\paginas\backend\users.js') }}"></script>
    @endsection
