@foreach ($vinhos as $key=>$vinho)
<div data-qntcl="{{$vinho->qnt_cl}}" data-peral="{{$vinho->perct_alco}}" onload="rate();" name="paginate" class="column columnvinho categoria{{$vinho->categoria->nome}} regiao{{$vinho->regiao}}  produtor{{$vinho->id_produtor}} @foreach ($vinhosclass as $key=>$vinhoclass)
@if($vinhoclass->id_vinho == $vinho->id) class{{$vinhoclass->classificacao}} @endif
@endforeach">
<a href="{{route('vinho',$vinho)}}">
    <div class="ui cube shape shapevinho shapeimgs{{$vinho->id}}">
        <input type="hidden" id="id_vinho" value="{{$vinho->id}}">
        <div class="sides">
            <div class="side active shapevinho">
                <img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$vinho->img) }}" alt="{{$vinho->nome}}">
            </div>
            @foreach ($vinhos_img as $key=>$vinho_img)
            @if ($vinho_img->id_vinho == $vinho->id)
            <div class="side sideimg">
                <img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$vinho_img->img) }}" alt="{{$vinho->nome}}">
            </div>
            @endif
            @endforeach
        </div>
    </div>
    </a>
    <div class="dividervinho"></div>
    <div title="Próximo Detalhe" class="ui ignored icon direction buttons imgbtndown">
        <div class="ui icon button baixo" data-animation="flip" data-direction="right" title="Flip Right"><i class="down long arrow icon"></i></div>
    </div>
    <div title="Próxima Imagem" class="ui ignored icon direction buttons imgbtnright">
        <div class="ui icon button direita" data-animation="flip" data-direction="right" title="Flip Right"><i class="right long arrow icon"></i></div>
    </div>

    <a href="{{route('vinho',$vinho)}}">
    <div class="ui cube shape shapedetalhes shapedetalhes{{$vinho->id}}">
        <input type="hidden" id="id_vinho" value="{{$vinho->id}}">
        <div class="sides sidesdetalhes">
            <div class="side active">
                <div class="nomevinho">
                    {{$vinho->nome}}
                </div>
            </div>
            <div class="side categoriavinhoside">
                <b>Categoria: </b> {{$vinho->categoria->nome}}
            </div>
            <div class="side produtorvinhoside">
                <b>Produtor: </b> {{$vinho->produtor->name}} {{$vinho->produtor->apelido}}
            </div>
            <div class="side classvinhoside">
                @foreach ($vinhosclass as $key=>$vinhoclass)
                @if($vinhoclass->id_vinho == $vinho->id)
                <b>Classificação: </b>
                <div class="ui disabled rating vinhosclass" data-rating="{{$vinhoclass->classificacao}}" data-max-rating="5"></div>
                @endif
                @endforeach
            </div>
            <div class="side regiaovinhosside">
                <b>Região: </b> {{$vinho->regiao}}
            </div>
            <div class="side qnt_clvinhosside">
                <b>Quantidade CL: </b>{{$vinho->qnt_cl}}
            </div>
            <div class="side per_aclvinhosside">
                <b>Percentagem Álcool: </b>{{$vinho->perct_alco}}%
            </div>
            <div class="side datavinhoside">
                <b>Data de Postagem: </b>{{ date('d-m-Y', strtotime($vinho->created_at))}}
            </div>
        </div>
    </div>
    </a>
</div>
@endforeach
<div class="pagination">
    {!! $vinhos->links() !!}
</div>