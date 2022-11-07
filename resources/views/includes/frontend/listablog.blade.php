@foreach ($blogs as $key=>$blog)
<div name="vinhocol" class="column columnvinho categoria{{$blog->categoria->titulo}}">
    <div class="ui cube shape shapevinho shapeimgs{{$blog->id}}">
        <input type="hidden" id="id_vinho" value="{{$blog->id}}">
        <div class="sides">
            <div class="side active shapevinho">
                <img class="img-fluid imgvinho" src="{{asset('storage/blog/'.$blog->img) }}" alt="{{$blog->titulo}}">
            </div>
        </div>
    </div>
    <div class="ui ignored icon direction buttons imgbtndown">
        <div class="ui icon button baixo" data-animation="flip" title="Próximo Detalhe" data-direction="right" title="Flip Right"><i class="down long arrow icon"></i></div>
    </div>
    <div class="ui ignored icon direction buttons imgbtnright">
        <div class="ui icon button direita" title="Próxima Imagem" data-animation="flip" data-direction="right" title="Flip Right"><i class="right long arrow icon"></i></div>
    </div>
    <div class="dividervinho"></div>

    <div class="ui cube shape shapedetalhes shapedetalhes{{$blog->id}}">
        <input type="hidden" id="id_vinho" value="{{$blog->id}}">
        <div class="sides sidesdetalhes">
            <div class="side active">
                <div class="nomevinho">
                    {{$blog->titulo}}
                </div>
            </div>
            <div class="side categoriavinhoside">
                {{$blog->categoria->nome}}
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="pagination">
    {!! $blogs->links() !!}
</div>