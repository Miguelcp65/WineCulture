@extends("paginas.frontend.layout")

@section('title', 'Vinhos')

@section('links')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vinhos.css') }}">
@endsection

@section('content')
<div class="banner">
	<img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/vinhos/vinhosback.jpg') }}" alt="banner">
</div>
<div class="ui grid bread">
	<div class="ui large breadcrumb">
		<a  href="{{route('index')}}" class="section">Início</a>
		<i class="right chevron icon divider"></i>
		<div class="active section">Lista de Vinhos</div>
	</div>
</div>
<div class="ui basic modal acarregar">
	<div class="ui icon header">
		<div style="width: 250px;" class="ui active slow green double loader"><br><br>
			A Carregar Lista Vinhos</div>
	</div>
</div>
<div class="ui basic modal aordenar">
	<div class="ui icon header">
		<div style="width: 250px;" class="ui active slow green double loader"><br><br>
			A Ordenar Lista Vinhos</div>
	</div>
</div>
<div class="ui grid maincontainer">
	<div class="row">
		<div class="three wide column semifiltros"></div>
		<div class="twelve wide column vinhosheader">
			<div class="ui attached stackable menu semiheader">
				<div class="ui container headercontainer">
					<a class="item">
						{{$vinhostotal}} vinhos encontrados
					</a>
					<a class="item refresh">
					<i id="sidebar" class="bars icon"></i>
					<i id="refreshvinhos" title="Actualizar Lista de Vinhos" class="sync icon"></i>
					<i id="fecharside" class="close icon"></i>
					</a>
					<div title="Filtrar Lista" class="right item ordenacao">
						<div class="ui labeled icon dropdown">
							<i class="filter icon iconfiltro"></i>
							<span id="ordenacao" class="text">Filtrar Lista</span>
							<div class="menu">
								<div class="header">
									<i class="tags icon tagsicon"></i>
									Ordenar por:
								</div>
								<div class="item itemordenacao" id="padrao">
									Padrão
								</div>
								<div class="item itemordenacao" id="alfabetica">
									Alfabética
								</div>
								<div class="item itemordenacao" id="classificacao">
									Classificação
								</div>
								<div class="item itemordenacao" id="data">
									Data de Postagem
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui grid semicontainer">
	<div class="row semirow">
		<div class="three wide column filtrosmain">
			<div class="filtros">
				<div class="ui vertical accordion menu filtrosmenu">
					<div class="item categorias">
						<a class="active title">
							<i class="dropdown icon"></i>
							Categoria
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									@foreach ($categorias as $key => $categoria)
									<div class="field">
										<div class="ui toggle checkbox filtroschecks">
											<input type="checkbox" class="categoriacheckb" value="{{$categoria->nome}}" id="{{$categoria->nome}}" name="categoria{{$categoria->nome}}">
											<label class="catenome">{{$categoria->nome}}</label>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="item produtores">
						<a class="active title">
							<i class="dropdown icon"></i>
							Produtor
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									@foreach ($produtores_vinho as $key => $produtor_vinho)
									<div class="field">
										<div class="ui toggle checkbox filtroschecks">
											<input type="checkbox" class="categoriacheckb" value="{{$produtor_vinho->produtor->name}}&nbsp;{{$produtor_vinho->produtor->apelido}}" id="{{$produtor_vinho->produtor->name}}&nbsp;{{$produtor_vinho->produtor->apelido}}" name="produtor{{$produtor_vinho->id_produtor}}">
											<label class="catenome">{{$produtor_vinho->produtor->name}} {{$produtor_vinho->produtor->apelido}}</label>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="item classificacoes">
						<a class="active title">
							<i class="dropdown icon"></i>
							Classificação
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									@foreach ($classificacoes as $key => $classificaccao)
									<div class="field">
										<div class="ui toggle checkbox filtroschecks">
											<input type="checkbox" class="categoriacheckb" value="{{$classificaccao->classificacao}}&nbsp;Estrelas" id="{{$classificaccao->classificacao}}&nbsp;Estrelas" name="class{{$classificaccao->classificacao}}">
											<label class="catenome">
												<div class="ui disabled rating vinhosclass" data-rating="{{$classificaccao->classificacao}}" data-max-rating="5"></div>
											</label>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="item regiao">
						<a class="active title">
							<i class="dropdown icon"></i>
							País
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									@foreach ($regioes as $key => $regiao)
									<div class="field">
										<div class="ui toggle checkbox filtroschecks">
											<input type="checkbox" class="categoriacheckb" value="{{$regiao->regiao}}" id="{{$regiao->regiao}}" name="regiao{{$regiao->regiao}}">
											<label class="catenome">{{$regiao->regiao}}</label>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="item qnt_cl">
						<a class="active title">
							<i class="dropdown icon"></i>
							Quantidade CL
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									<div class="field">
										<div class="ui checkbox filtroschecks filtroschecksqnt_cl">
											<div class="ui ticked range slider qnt_cl" id="slider-1"></div>
											<div class="ui input">
												<div class="gruposliders"> 
												<li>Mín:</li> 
												<input readonly type="text" class="qntclvals1">
												<li>Máx:</li> 
												<input readonly type="text" class="qntclvals2">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item per_alc">
						<a class="active title">
							<i class="dropdown icon"></i>
							Percentagem Álcool
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									<div class="field">
										<div class="ui checkbox filtroschecks filtroschecksperc_alc">
											<div class="ui ticked range slider per_alc" id="slider-1"></div>
											<div class="ui input">
												<div class="gruposliders"> 
												<li>Mín:</li> 
												<input readonly type="text" class="per_alcvals1">
												<li>Máx:</li> 
												<input readonly type="text" class="per_alcvals2">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="twelve wide column listavinhos">
			<div class="ui attached stackable menu headervinhos">
				<div class="ui container headervinhoscontainer">
					<div class="item itemfiltros">
					</div>
					<a class="ui image label reporfiltros">
						<i class="trash alternate icon apagarfiltros"></i>
					</a>

					<div class="right item headervinhospesquisa">
						<div class="ui search">
							<div class="ui icon input">
								<input class="prompt" id="intpesquisa" type="search" placeholder="Pesquisar">
							</div>
							<i class="search icon pesquisaricon" title="Pesquisar"></i>
							<div class="results"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="ui four column grid vinhoscontainer">
				@include('includes.frontend.listavinhos')
			</div>
		</div>
	</div>
</div>

@endsection
@section('javascript')
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$(document).ready(function() {
		$(document).on('click', '#refreshvinhos', function() {
			$(this).addClass("animacao");
			setTimeout(function() {
				$("#refreshvinhos").removeClass("animacao")
			}, 1000);

			event.preventDefault();
			var page = window.location.href;
			fetch_refresh(page);

			function fetch_refresh(page) {
				var _token = $('meta[name="csrf-token"]').attr('content');
				$.ajax({
					url: "{{ route('vinhos') }}",
					method: "GET",
					data: {
						_token: _token,
						page: page
					},
					success: function(data) {
						$('.vinhoscontainer').html(data);
						$('html, body').animate({
							scrollTop: $(".breadcrumb").offset().top
						}, 500);
						$('.ui.rating.vinhosclass')
							.rating();
						setTimeout(function() {
							$('body')
								.toast({
									title: 'Lista Actualizada!',
									message: 'A Lista de Vinhos Foi Actualizada Com Sucesso',
									showProgress: 'bottom',
									classProgress: 'green'
								})
						}, 850);;
					}
				});
			}
		});

		$(document).on('click', '.pagination a', function(event) {
			event.preventDefault();
			$('.ui.basic.modal.acarregar')
				.modal('show')
				.delay(800)
				.queue(function() {
					$(this).modal('hide').dequeue();
				});;
			var page = $(this).attr('href').split('page=')[1];
			fetchvinhos(page);
		});

		function fetchvinhos(page) {
			var _token = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				url: "{{ route('vinhos') }}",
				method: "POST",
				data: {
					_token: _token,
					page: page
				},
				success: function(data) {
					$('.vinhoscontainer').html(data);
					$('html, body').animate({
						scrollTop: $(".breadcrumb").offset().top
					}, 500);
					$('.ui.rating.vinhosclass')
						.rating();
				}

			});
		}
	});
	$(document).ready(function() {
		$(".itemordenacao").on('click', function() {
			var ordem = $(this).attr("id");
			var url;
			switch (ordem) {
				case 'padrao':
					url = "{{ route('vinhos') }}"
					break;
				case 'alfabetica':
					url = "{{ route('vinhos.alfabetica') }}"
					break;
				case 'classificacao':
					url = "{{ route('vinhos.classificacao') }}"
					break;
				case 'data':
					url = "{{ route('vinhos.data') }}"
					break;
				default:
			}

			event.preventDefault();
			$('.ui.basic.modal.aordenar')
				.modal('show')
				.delay(800)
				.queue(function() {
					$(this).modal('hide').dequeue();
				});
			var page = window.location.href;
			fetch_ordem(page);

			function fetch_ordem(page) {
				var _token = $('meta[name="csrf-token"]').attr('content');
				$.ajax({
					url: url,
					method: "GET",
					data: {
						_token: _token,
						page: page
					},
					success: function(data) {
						$('.vinhoscontainer').html(data);
						$('html, body').animate({
							scrollTop: $(".breadcrumb").offset().top
						}, 500);
						$('.ui.rating.vinhosclass')
							.rating();
					}
				});
			}
		});
	});
</script>
<script>
	var vinhos = [];
</script>
@foreach ($vinhos as $key=>$vinho)
<script>
	vinhos.push(@json($vinho->nome));
</script>
@endforeach


<script>
	var vinhos_categorias = [];
</script>
@foreach ($categorias as $key=>$categoria)
<script>
	vinhos_categorias.push(@json($categoria->nome));
</script>
@endforeach


<script>
	var vinhos_classificacoes = [];
</script>
@foreach ($classificacoes as $key=>$classificaccao)
<script>
	var classificacaovinho = @json($classificaccao->classificacao);

	vinhos_classificacoes.push(classificacaovinho + " Estrelas");
</script>
@endforeach


<script>
	var vinhos_regioes = [];
</script>
@foreach ($regioes as $key=>$regiao)
<script>
	vinhos.push(@json($regiao->regiao));
</script>
@endforeach


<script>
	var vinhos_produtores = [];
</script>
@foreach ($vinhos_produtores as $key=>$vinhos_produtor)
<script>
	nome1 = @json($vinhos_produtor->produtor->name);
	nome2 = @json($vinhos_produtor->produtor->apelido);
	var nomeapelido = nome1.concat(" ", nome2);
	vinhos_produtores.push(nomeapelido);
</script>
@endforeach
<script src="{{ URL::asset('assets/js/paginas/frontend/vinhos.js') }}"></script>
@endsection