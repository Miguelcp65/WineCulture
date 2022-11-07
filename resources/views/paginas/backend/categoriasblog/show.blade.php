@extends ('layouts.backend.admin')
@section('title', 'Categorias Blog')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <a class="backurl" href="{{ url()->previous() }}">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar</span>
            </a>
            <h2>Categoria</h2>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput">Categoria</label>
                <input readonly class="form-control" type="text" class="form-control" name="nome"
                    id="formGroupExampleInput" value="{{  $categories->name}}">
            </div>
            <a href="{{ route('categoriasblog.edit', $categories) }}" class="btn btn-xs btn-warning btn-p">Editar Categoria</a>
            <a style="color:white;" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('categoriasblog.destroy', $categories) }}">Apagar Categoria</a>
        </div>
    </div>
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
