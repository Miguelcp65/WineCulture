@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')

<nav aria-label="breadcrumb bread">
    <ol class="breadcrumb breadcrumb-inverse">
        <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
        <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
    </ol>
</nav>
<div class="content-wrapper">
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="users">
                    <div class="card-header justify-content-between">
                        <h2>Perguntas Frequentes</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table id="tablefaq" class="ui celled table tamanho">
                            <thead>
                                <tr>
                                    <th class="d-none d-lg-table-cell">Pergunta</th>
                                    <th class="d-none d-lg-table-cell">Resposta</th>
                                    <th class="w-2">Categoria</th>
                                    <th class="acoes">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perguntas as $pergunta)
                                <tr id="trv">
                                    <td onclick="window.location.href = '{{ route('faq.show', ['pergunta' => $pergunta]) }}';" class="tdhover">{{ $pergunta->pergunta }}</td>
                                    <td onclick="window.location.href = '{{ route('faq.show', ['pergunta' => $pergunta]) }}';" class="tdhover">{!! $pergunta->resposta !!}</td>
                                    <td onclick="window.location.href =  '{{ route('faq.show', ['pergunta' => $pergunta]) }}';" class="tdhover">{{ $pergunta->categoria->categoria }}</a></td>
                                    <td class="tdhover">
                                        <a href="{{ route('faq.show', ['pergunta' => $pergunta]) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                                        <a href="{{ route('faq.edit', $pergunta) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                                        <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('faq.destroy', $pergunta) }}"><i class="fas fa-trash fa-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></button>
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
    <script src="{{ asset('assets\js\paginas\backend\faq.js') }}"></script>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Pergunta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if (session('status'))
                        <div class="alert alert-success">
                            <strong>{{ session('status') }}</strong>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="formGroupExampleInput">Pergunta</label>
                            <input type="text" class="form-control" name="pergunta" value="{{ old('pergunta') }}" id="formGroupExampleInput">
                        </div>
                        <div class="form-group">
                            <label for="inputCategory">Categoria</label>
                            <select name="categoria_id" id="inputCategory" class="form-control">
                                @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">
                                    {{ $categoria->categoria }}
                                </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Resposta</label>
                            <textarea class="ckeditor form-control" value="{{ old('resposta') }}" id="exampleFormControlTextarea1" rows="3" name="resposta"></textarea>
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
        $('#deleteConfirmModal').on('show.bs.modal', function(e) {
            var route = $(e.relatedTarget).data('route');
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
