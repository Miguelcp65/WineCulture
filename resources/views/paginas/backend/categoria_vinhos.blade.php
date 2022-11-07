@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')	
<div class="row">
      
      <div class="col-12">
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Tabela das Categorias de Vinhos</h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tabelausers" class="ui celled table" style="width:100%">
              <thead>
                <tr>
                  <th>ID</th>
				  @foreach($categorias as $key => $categoria)
				  @if ($vinho->id_categoria == $categoria->id)
                  <th class="d-none d-lg-table-cell">{{$categoria->nome}}</th>
				  @endif
				  @endforeach
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>1</td>
                  <td>
                    <a class="text-dark">nome</a>
                  </td>
                  </td>

                </tr>
                
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
      
      
      
    </div>
@endsection