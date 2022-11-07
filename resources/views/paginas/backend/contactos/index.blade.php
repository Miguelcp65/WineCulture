@extends ('layouts.backend.admin')

@section('title', 'Contactos')

@section('content')
<nav aria-label="breadcrumb bread">
  <ol class="breadcrumb breadcrumb-inverse">
    <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
    <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mensagens</li>
  </ol>
</nav>
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-table-border-none" id="users">
                        <div class="card-header justify-content-between">
                            <h2>Mensagens</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="tablecontactos" class="ui celled table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="d-none d-lg-table-cell">Nome</th>
                                        <th class="d-none d-lg-table-cell">Assunto</th>
                                        <th class="d-none d-lg-table-cell">Mensagem</th>
                                        <th class="d-none d-lg-table-cell">Resposta</th>
                                        <th class="d-none d-lg-table-cell">Estado</th>
                                        <th class="d-none d-lg-table-cell">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mensagens as $mensagem)
                                        <tr id="trv">
                                            <td onclick="window.location.href = '{{ route('contactos.show', ['mensagem' => $mensagem]) }}';"
                                                class="tdhover">
                                                {{ $mensagem->name }}
                                            </td>
                                            <td onclick="window.location.href = '{{ route('contactos.show', ['mensagem' => $mensagem]) }}';"
                                                class="tdhover">
                                                {{ $mensagem->assunto }}
                                            </td>
                                            <td onclick="window.location.href = '{{ route('contactos.show', ['mensagem' => $mensagem]) }}';"
                                                class="tdhover">
                                                {{ $mensagem->mensagem }}
                                            </td>
                                            <td onclick="window.location.href = '{{ route('contactos.show', ['mensagem' => $mensagem]) }}';"
                                                class="tdhover">
                                                @if ($mensagem->estado == 'Respondida')
                                                    {{ $mensagem->resposta }}
                                                @else
                                                    --------
                                                @endif
                                            </td>
                                            <td onclick="window.location.href = '{{ route('contactos.show', ['mensagem' => $mensagem]) }}';"
                                                class="tdhover">
                                                {{ $mensagem->estado }}
                                            </td>
                                            <td class="tdhover">
                                                <a href="{{ route('contactos.show', $mensagem) }}"
                                                    class="btn btn-xs btn-success btn-p"><i
                                                        class="fas fa-eye fa-xs"></i></a>
                                                @if ($mensagem->estado == 'Respondida')
                                                    <a href="{{ route('contactos.edit', $mensagem) }}"
                                                        class="btn btn-xs btn-warning btn-p disabled"><i
                                                            class="fas fa-pen fa-xs"></i></a>
                                                @else
                                                    <a href="{{ route('contactos.edit', $mensagem) }}"
                                                        class="btn btn-xs btn-warning btn-p"><i
                                                            class="fas fa-pen fa-xs"></i></a>
                                                @endif
                                                <button type="button" class="btn btn-xs btn-danger btn-p"
                                                    data-toggle="modal" data-target="#deleteConfirmModal"
                                                    data-route="{{ route('contactos.destroy', $mensagem) }}"><i
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
    </div>
    <script src="{{ asset('assets\js\paginas\backend\contactos.js') }}"></script>
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalTitle"
        aria-hidden="true">
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
@endsection
