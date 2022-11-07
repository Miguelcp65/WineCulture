@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div>
 <div class="content-wrapper">
        <div class="content">
            <h2>Inserir Vinho</h2>
            <br>
            <form action="{{route('admin_insert_vinho')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" name="vinho_nome" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" id="exampleFormControlSelect1" >
						<option value="tinto">Vinho Tinto</option>
						<option value="rose">Vinho Rosé</option>
						<option value="porto">Vinho do Porto</option>
						<option value="branco">Vinho Branco</option>
						<option value="espumante">Espumante</option>
					</select>
                </div>
				
				<div class="form-group">
					<label for="customRange3">Percentagem de Álcool</label>
					<input type="number" class="form-control" name="vinho_perc" step=0.1 id="formGroupExampleInput">
				</div>
				
				<div class="form-group">
					<label for="customRange3">Quantidade CL</label>
					<input type="number" class="form-control" name="vinho_cl" step=1 id="formGroup">
				</div>
				
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label>
                    <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"name="vinho desc">
					</textarea>
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>
</div>
@endsection