@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div>
 <div class="content-wrapper">
        <div class="content">
            <h2>Inserir Categoria de Vinho</h2>
            <br>
            <form action="{{route('admin_insert_categoria_vinho')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" name="vinho_nome" id="formGroupExampleInput">
                </div>
				
				<div class="form-group">
					<label for="exampleFormControlFile1">Inserir Imagem</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1"  name="img">
				</div>
				
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>
</div>
@endsection