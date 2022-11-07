@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<nav aria-label="breadcrumb bread">
  <ol class="breadcrumb breadcrumb-inverse">
    <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
    <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
  </ol>
</nav>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      @if (count($blogs))
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Tabela de Posts</h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tabelablog" class="ui celled table" style="width:100%">
              <thead>
                <tr>
                  <th class="d-none d-lg-table-cell">Imagem</th>
                  <th class="d-none d-lg-table-cell">Titulo</th>
                  <th class="d-none d-lg-table-cell">Categoria</th>
                  <th class="d-none d-lg-table-cell">Autor</th>
                  <th class="d-none d-lg-table-cell">Data</th>
                  <th class="d-none d-lg-table-cell">Ações</th>
                </tr>
              </thead>
              <tbody>

                @foreach($blogs as $blog)
                <tr id="trv">
                  <td class="tdhover">
                    <img src="{{asset('storage/blog/'.$blog->img) }}" style="width:65px; height:65px; object-fit: cover;  object-position: 0% 90%;" class="rounded-circle w-45 tdhover" alt="{{$blog->nome}}">
                  </td>
                  <td class="tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';">{{$blog->titulo}}</td>
                  <td class="d-none d-lg-table-cell tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';">{{ $blog->categoria->name }}</td>
                  <td class="d-none d-lg-table-cell tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';">{{$blog->user->name}} {{$blog->user->apelido}}</td>
                  <td class="d-none d-lg-table-cell tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';">{{ date('d-m-Y h:m', strtotime($blog->created_at))}}</td>

                  <td class="tdhover">
                    <a href="{{ route('blog.show', $blog) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                    <a href="{{ route('blog.edit', $blog) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                    <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('blog.destroy', $blog) }}"><i class="fas fa-trash fa-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></button>
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
  @else
  <h6>Sem Posts Registrados</h6>
  @endif
</div>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          @if (session('status'))
          <div class=”alert alert-success”>
            <strong>{{ session('status') }}</strong>
          </div>
          @endif
          <input type="hidden" value="{{$id_user_auth}}" name="id_user">
          <div class="form-group">
            <label for="formGroupExampleInput">Nome do Post</label>
            <input type="text" class="form-control" name="titulo" id="formGroupExampleInput" placeholder="Nome do Post">
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Autor</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$id_user_auth}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{now()}}">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" id="exampleFormControlSelect1" name="id_categoria">
              <option value="">Selecione uma Categoria</option>
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Introdução</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="preview"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Corpo da Post</label>
            <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
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
<script src="{{ asset('assets\js\paginas\backend\blog.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.ckeditor').ckeditor();
  });
</script>
@endsection