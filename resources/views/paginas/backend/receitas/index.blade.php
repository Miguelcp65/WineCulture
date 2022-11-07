@extends ('layouts.backend.admin')
@section('title', 'Dashboard')

@section('content')

<nav aria-label="breadcrumb bread">
    <ol class="breadcrumb breadcrumb-inverse">
        <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
        <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Receitas</li>
    </ol>
</nav>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Tabela de Receitas</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table id="tablereceitas" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="d-none d-lg-table-cell">Imagem</th>
                                    <th class="d-none d-lg-table-cell">Nome</th>
                                    <th class="d-none d-lg-table-cell">Categoria</th>
                                    <th class="d-none d-lg-table-cell">Utilizador</th>
                                    <th class="d-none d-lg-table-cell">Descrição</th>
                                    <th class="d-none d-lg-table-cell opcoes">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($receitas as $receita)
                                <tr id="trv">
                                    <td class="tdhover d-none d-lg-table-cell"><img src="{{asset('storage/receitas/'.$receita->foto) }}" class="rounded-circle w-45" style="width: 60px; height: 60px; object-fit: cover;"></td>
                                    <td class="tdhover">
                                        <a class="d-none d-lg-table-cell" >{{ $receita->nome }}</a>
                                    </td>
                                    @foreach ($category_wines as $category_wine)
                                    @if ($receita->id_categoria == $category_wine->id)
                                    <td class="tdhover ">
                                        <a class="d-none d-lg-table-cell">{{ $category_wine->nome }}</a>
                                    </td>
                                    @endif
                                    @endforeach
                                    @foreach ($Users as $User)
                                    @if ($receita->id_user == $User->id)
                                    <td class="tdhover">
                                        <a class="d-none d-lg-table-cell">{{ $User->name }} {{ $User->apelido }}</a>
                                    </td>
                                    @endif
                                    @endforeach
                                    <td class="tdhover">
                                        <a class="d-none d-lg-table-cell tdhover">{{ $receita->descricao }}</a>
                                    </td>
                                    <td class="tdhover">
                                        <div class="acoes">
                                        <a href="{{ route('receitas.show', $receita) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                                        <a href="{{ route('receitas.edit', $receita) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                                        <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('receitas.destroy', $receita) }}"><i class="fas fa-trash fa-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></button>
                                    </div>
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
</div>
<script src="{{ asset('assets\js\paginas\backend\receitas.js') }}"></script>

<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalTitle" aria-hidden="true">
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
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Receita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('receitas.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if (session('status'))
                    <div class=”alert alert-success”>
                        <strong>{{ session('status') }}</strong>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nome da Receita</label>
                        <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome da Receita">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categoria</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_categoria">
                            <option value="">Selecione uma Categoria</option>
                            @foreach ($categories_wines as $category_wine)
                            <option value="{{$category_wine->id}}">{{$category_wine->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{now()}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ingredientes</label>
                        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3" name="ingre"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Receita</label>
                        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3" name="preparo"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Submeter Imagem</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
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
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection
