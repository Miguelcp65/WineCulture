@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<nav aria-label="breadcrumb bread">
  <ol class="breadcrumb breadcrumb-inverse">
    <a data-toggle="tooltip" title="Voltar" href="{{ url()->previous() }}" class="voltar"><i class="fas fa-arrow-left"></i></a>
    <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Chat</li>
  </ol>
</nav>
<div class="content-wrapper">
  <div class="content">
    <div class="card card-default mb-0 chat">
      <div class="row bg-white no-gutters chat">
        <div class="col-lg-4">
          <!-- Chat Left Side -->
          <div class="chat-left-side">

            <div class="chatheader">
              <h2>WINECHAT</h2>
            </div>

            <ul class="list-unstyled border-top mb-0" id="chat-left-content">
              @foreach($mensagens as $key => $mensagem)
              <li>
                <a id="chatact-{{$mensagem->idenvio->id}}" class="media media-message" style="width: 100%; height: 100%; z-index: 5;">
                  <div class="position-relative mr-3">
                    @if ($mensagem->idenvio->img == "Sem Imagem")
                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle" alt="Avatar Image">
                    @else
                    <img src="/assets/img/users/{{$mensagem->idenvio->img}}" class="rounded-circle" alt="Avatar Image">
                    @endif
                  </div>
                  <div class="media-body d-flex justify-content-between" style="pointer-events: none;">
                    <div class="message-contents">
                      <h4 class="title">
                        {{$mensagem->idenvio->name}} {{$mensagem->idenvio->apelido}}
                      </h4>
                    </div>
                    <span class="date">Clique para abrir</span>
                  </div>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-7 col-xl-8">
          <!-- Chats -->
          <div class="chat-right-side">
            <div style=" height: 91px;" class="media media-chat align-items-center mb-0 media-chat-header" href="#">
              <div class="media-body w-100">
                <div class="d-flex justify-content-between align-items-center">
                  @foreach($mensagens as $key => $mensagem)

                  <div style="align-items: center; " class="media media-chat media-left mb-0 chatact-{{$mensagem->idenvio->id}}">
                    @if ($mensagem->idenvio->img == "Sem Imagem")
                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">
                    @else
                    <img src="/assets/img/users/{{$mensagem->idenvio->img}}" class="rounded-circle mr-3" alt="Avatar Image">
                    @endif
                    <h3 class="heading-title mb-0"><a href="#">{{$mensagem->idenvio->name}} {{$mensagem->idenvio->apelido}}</a></h3>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="chat-right-content" id="chat-right-content" data-simplebar="init">
              <div class="simplebar-wrapper" style="margin: -24px;">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div style="margin-bottom: 50px;" class="simplebar-mask">
                  <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                      <div class="simplebar-content" style="padding: 24px;">
                        @php $i = 0;@endphp
                        @foreach($mensagens as $key => $mensagem)
                        @foreach($mensagens_chat as $keyy => $chat)

                        @if ($chat->id_envio == $mensagem->id_envio || $chat->id_destino == $mensagem->id_envio)

                        @if ($chat->id_envio == $mensagem->id_envio)
                        <div id="{{$chat->id}}" class="media media-chat mensagenschatact-{{$mensagem->id_envio}}  media-left chatact-{{$mensagem->id_envio}}">
                          @php $i++;@endphp
                          @php $loop->last @endphp
                          @if ($mensagem->idenvio->img == "Sem Imagem")
                          <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">
                          @else
                          <img src="/assets/img/users/{{$mensagem->idenvio->img}}" class="rounded-circle mr-3" alt="Avatar Image">
                          @endif
                          <div class="media-body " id="{{$chat->id}}">
                            <p class="message">{{$chat->mensagem}}</p>
                            <div class="date-time">{{$chat->created_at}}</div>
                            @if($loop->last)
                            <input type="hidden" id="idmediachat" value=""></input>
                            <input type="hidden" id="id_chat" value="{{$chat->id}}"></input>
                            @endif
                          </div>
                        </div>
                        @endif
                        @if ($chat->id_envio == $id_user_auth)
                        <div class="media media-chat media-right chatact-{{$mensagem->id_envio}}">
                          <div class="media-body">
                            <p class="message">{{$chat->mensagem}}</p>
                            <div class="date-time">{{ date('d-m-Y h:m', strtotime($chat->created_at))}}</div>
                          </div>

                          @if (Auth::user()->img == "Sem Imagem")
                          <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">
                          @else
                          <img class="rounded-circle ml-3" src="/assets/img/users/{{Auth::user()->img}}" alt="Image">
                          @endif
                        </div>
                        @endif
                        @endif
                        @endforeach
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto;"></div>
              </div>
              <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
              </div>
              <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 50px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
              </div>
            </div>
            @foreach($mensagens as $key => $mensagem)
            <form id="{{$mensagem->id_envio}}" class="media media-left px-5 pb-3 chatact-{{$mensagem->id_envio}}">
              {{ csrf_field() }}
              <input type="hidden" name="id_destino{{$mensagem->idenvio->id}}" value="{{$mensagem->idenvio->id}}">
              <input type="text" id="enviarmsg" name="mensagem{{$mensagem->idenvio->id}}" class="form-control mb-3" placeholder="Escreva a sua resposta...">
              <button id="{{$mensagem->idenvio->id}}" class="btn btn-success btn-submit">Enviar</button>
            </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $(".btn-submit").click(function(e) {
    var id = $(this).attr("id");
    e.preventDefault();
    mensagem = $("input[name=mensagem" + id + "]").val();
    id_destino = $("input[name=id_destino" + id + "]").val();
    $.ajax({
      type: 'POST',
      url: "{{ route('dashboard.post') }}",
      data: {
        mensagem: mensagem,
        id_destino: id_destino
      },
      success: function(response) {
        var datam = Object(response.msg)[Object(response.msg).length - 1].created_at;
        var mensagem = Object(response.msg)[Object(response.msg).length - 1].mensagem;
        datam = new Date(datam);
        var data = moment(datam).format('DD-MM-YYYY hh:mm');
        if (response) {
          $(".simplebar-content").append('<div class="media media-chat media-right chatact-' + id + '"><div class="media-body"><p class="message">' + mensagem + '</p> <div class="date-time">' + data + '</div> </div>@if (Auth::user()->img == "Sem Imagem")<img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">@else<img class="rounded-circle ml-3" src="/assets/img/users/{{Auth::user()->img}}" alt="Image">@endif</div>');
          $("#enviarmsg").val(" ");
          $("#enviarmsg").attr("placeholder", "Escreva a sua resposta....");
        }
      },
    });
  })
</script>
<script>
  setInterval(function() {
    $.ajax({
      type: "GET",
      url: "{{ route('dashboard.refresh') }}",
      success: function(response) {
        var id_chat = $("#id_envio").val();
        var mediachat = $("#idmediachat").last().val();
        var lastidmsg = $(".mensagens" + mediachat).last().attr("id");
        var id_auth = (response.id_user_auth);
        if ((Object(response.msg)[Object(response.msg).length - 1].id_envio) != id_auth) {
          if ((Object(response.msg)[Object(response.msg).length - 1].id) != lastidmsg) {
            var id_envio = Object(response.msg)[Object(response.msg).length - 1].id_envio;
            var id_ultchat = Object(response.msg)[Object(response.msg).length - 1].id;
            var datam = Object(response.msg)[Object(response.msg).length - 1].created_at;
            var mensagem = Object(response.msg)[Object(response.msg).length - 1].mensagem;
            datam = new Date(datam);
            var data = moment(datam).format('DD-MM-YYYY hh:mm');
            if ((Object(response.msg)[Object(response.msg).length - 1].id_destino) == id_auth) {
              $("#simplechatact-" + id_envio).append('<div id="' + id_ultchat + '" class="media media-chat mensagenschatact-' + id_envio + '  media-left chatact-' + id_envio + '" style="display: flex;"><img src="/assets/img/users/' + id_envio + '.jpg" class="rounded-circle mr-3" alt="Avatar Image"> <div class="media-body " id="' + id_ultchat + '"><p class="message">' + mensagem + '</p><div class="date-time">' + data + '</div><input type="hidden" id="idmediachat" value="chatact-' + id_envio + '"><input type="hidden" id="id_chat" value="' + id_ultchat + '"></div></div>');
            }
          }
        }
      }
    });
  }, 3000);
</script>
<script src="{{ asset('assets\js\paginas\backend\chat.js') }}"></script>
@endsection