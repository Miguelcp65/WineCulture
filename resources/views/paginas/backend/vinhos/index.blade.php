@extends ('layouts.backend.admin')

@section('title', 'Vinhos')

@section('content')
<nav aria-label="breadcrumb bread">
  <ol class="breadcrumb breadcrumb-inverse">
    <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
    <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Vinhos</li>
  </ol>
</nav>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="row tabelass" style="width:100%">
        <div class="col-12">
          <div class="card card-table-border-none" id="vinhosa">
            <div class="card-header justify-content-between">
              <h2 id="titulotable">Tabela de Vinhos</h2>
            </div>
            <div class="card-body pt-0 pb-5">
              <table id="tablevinhos" class="ui celled table" style="width:100%">
                <thead id="tablevinhosthead">
                  <tr>
                    <th class="d-none d-lg-table-cell">Imagem</th>
                    <th class="d-none d-lg-table-cell">Nome</th>
                    <th class="d-none d-lg-table-cell">Categoria</th>
                    <th class="d-none d-lg-table-cell">Produtor</th>
                    <th class="d-none d-lg-table-cell">Região</th>
                    <th class="d-none d-lg-table-cell">Options</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="trv">
                    @foreach($vinhos as $key => $vinho)

                    <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">
                      <img src="\storage\vinhos\{{$vinho->img}}" style="width:65px; height:65px; object-fit: cover; object-position: 0% 90%;" class="rounded-circle w-45" alt="{{$vinho->nome}}">
                    </td>
                    <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$vinho->nome}}</td>
                    @foreach($categorias as $key => $categoria)
                    @if ($vinho->id_categoria == $categoria->id)
                    <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$categoria->nome}}</td>
                    @endif
                    @endforeach
                    @foreach($users as $key => $user)
                    @if ($vinho->id_produtor == $user->id)
                    <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$user->name}} {{$user->apelido}}</td>
                    @endif
                    @endforeach
                    <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$vinho->regiao}}</td>
                    <td class="tdhover">
                      <a href="{{ route('vinhos.show', $vinho) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                      <a href="{{ route('vinhos.edit', $vinho) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                      <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('vinhos.destroy', $vinho) }}"><i class="fas fa-trash fa-xs"></i></button>
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
  <script src="{{ URL::asset('assets\js\paginas\backend\vinhos.js') }}"></script>

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
          <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Vinho</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('vinhos.store') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @if (session('status'))
            <div class="alert alert-success">
              <strong>{{ session('status') }}</strong>
            </div>
            @endif

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Nome do vinho</label>
              <input type="text" class="form-control" name="nome" value="{{ old('nome') }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Categoria</label>
              <select class="form-control" id="exampleFormControlSelect1" name="id_categoria">

                @foreach ($categorias as $categorias)
                <option value="{{$categorias->id}}"> {{$categorias->nome}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Produtor</label>
              <select class="form-control" id="exampleFormControlSelect1" name="id_produtor">

                @foreach($users as $key_user => $user)
                @if($user->tipouser == 'Produtor')
                <option style="background-image:url('\storage\vinhos\1.jpg')" value="{{$user->id}}">{{$user->name}} {{$user->apelido}}</option>
                @endif
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="descricao">{{ old('descricao') }}</textarea>
            </div>

            <div class="form-row">

              <div class="col-md-4 mb-2">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Região</label>
                  <input type="text" class="form-control" name="regiao" value="{{ old('regiao') }}">
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Quantidade Cilindrica</label>
                  <input type="number" class="form-control" name="qnt_cl" value="{{ old('qnt_cl') }}">
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Percentagem Álcool</label>
                  <input type="number" class="form-control" name="perct_alco" value="{{ old('perct_alco') }}">
                </div>
              </div>
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