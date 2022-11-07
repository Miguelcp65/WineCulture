@extends ('layouts.backend.admin')

@section('title', 'Categorias FAQ')

@section('content')

<nav aria-label="breadcrumb bread">
    <ol class="breadcrumb breadcrumb-inverse">
        <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
        <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categorias de Perguntas</li>
    </ol>
</nav>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="users">
                    <div class="card-header justify-content-between">
                        <h2>Categorias de Perguntas</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table id="tablecategoriaFAQ" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="d-none d-lg-table-cell">Categoria</th>
                                    <th class="d-none d-lg-table-cell">Descrição</th>
                                    <th class="d-none d-lg-table-cell">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                <tr id="trv">
                                    <td onclick="window.location.href = '{{ route('categoriasFAQ.show', ['categoria' => $categoria]) }}';" class="tdhover">
                                        {{ $categoria->categoria }}
                                    </td>
                                    <td onclick="window.location.href = '{{ route('categoriasFAQ.show', ['categoria' => $categoria]) }}';" class="tdhover">
                                        {{ $categoria->descricao }}
                                    </td>
                                    <td class="tdhover">
                                        <a href="{{ route('categoriasFAQ.show', $categoria) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                                        <a href="{{ route('categoriasFAQ.edit', $categoria) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                                        <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('categoriasFAQ.destroy', $categoria) }}"><i class="fas fa-trash fa-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></button>
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
<script src="{{ asset('assets\js\paginas\backend\categoriaFAQ.js') }}"></script>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categoriasFAQ.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="formGroupExampleInput">Categoria</label>
                        <input type="text" class="form-control" name="categoria" value="{{ old('categoria') }}" id="formGroupExampleInput">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Descrição</label>
                        <input type="text" class="form-control" name="descricao" value="{{ old('descricao') }}" id="exampleFormControlSelect1">
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
@endsection