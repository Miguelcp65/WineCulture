@extends("paginas.frontend.layout")

@section('title', 'Sobre')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/sobre.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
@endsection

@section("content")

<img class="sobre_banner" src="assets\img\paginas\frontend\sobre\banner_sobra.png" alt="banner">

<div class="container">

  <div class="mt-5 ml-3 mr-3 pb-4 pl-3 pr-3" data-aos="fade-up" data-aos-delay="150">
    <div class="row">

      <div class="col-md-5 mt-5">
        <h2 class="sobre_color mb-5"><b>WineCulture</b></h2>
        <p>
          A WineCulture é uma instituição sem fins lucrativos, com o objetivo de promover a vinicultura nacional.<br><br>
          Com o nosso website nós listamos todos os nossos vinhos, com toda a sua informação e com o seu acompanhamento perfeito.<br><br>

          A nossa instituição é excelente para os produtores de vinho de Portugal, se for um produtor Português pode contactar-nos para publicar os seus vinhos, promovendo assim a vinicultura nacional.<br><br>
          Temos também uma parte comercial onde vendemos mercadoria como acessórios pessoais, de escritório, vestuário e produtos para se proteger durante a pandemia.<br><br>
          Conte conosco para descobrir a vinicultura nacional!
        </p>
      </div>

      <div class="col mt-5"></div>
      <div class="col mt-5 sobre_divider"></div>

      <div class="col-md-5 mt-5">
        <h2 class="sobre_color mb-5"><b>Missão</b></h2>
        <p>
          A missão da nossa instituição é promover a vinicultura nacional.<br><br>
          Com o nosso website é possivel descobrir novos vinhos de maneira rápida, sendo possível filtrar a sua pesquisa por categoria, o seu produtor, a sua classificação ou a sua região!<br><br>

          Para além de pesquisar vinhos é também possível encontrar os acompanhamentos mais adequados para o seu vinho de escolha.<br><br>

        </p>
      </div>
    </div>
  </div>

  <div class="p-3 m-3 mb-5 mt-5 text-center" data-aos="fade-up" data-aos-delay="50">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/35Q00Tz6NnQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div class="mt-5 ml-3 mr-3 pb-4 pl-3 pr-3" data-aos="fade-up" data-aos-delay="50">
    <h2 class="sobre_color text-center"><b>Nossa Equipa</b></h2>
  </div>

  <div class="container mb-5" data-aos="fade-up" data-aos-delay="80">

    <div class="row team-row">

      <div class="col-md-3 col-sm-6 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="/assets/img/paginas/frontend/index/team/team-1.jpg" alt="Sérgio Silvestre">
            <div class="overlay">
              <div class="team-details text-center">

                <div class="socials mt-5">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Sérgio Silvestre</h6>
          <span>Full-Stack Developer</span>
        </div>
      </div>
      <!-- end team member -->

      <div class="col-md-3 col-sm-6 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="/assets/img/paginas/frontend/index/team/team-2.jpg" alt="Guilherme Meireles">
            <div class="overlay">
              <div class="team-details text-center">

                <div class="socials mt-5">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Guilherme Meireles</h6>
          <span>Front-End Developer</span>
        </div>
      </div>
      <!-- end team member -->

      <div class="col-md-3 col-sm-6 team-wrap">
        <div class="team-member last text-center">
          <div class="team-img">
            <img src="/assets/img/paginas/frontend/index/team/team-3.jpg" alt="José Parreira">
            <div class="overlay">
              <div class="team-details text-center">

                <div class="socials mt-5">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">José Parreira</h6>
          <span>Back-End Developer</span>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 team-wrap">
        <div class="team-member last text-center">
          <div class="team-img">
            <img src="/assets/img/paginas/frontend/index/team/team-4.jpg" alt="Miguel Pereira">
            <div class="overlay">
              <div class="team-details text-center">

                <div class="socials mt-5">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Miguel Pereira</h6>
          <span>Full-Stack Developer</span>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team-wrap">
        <div class="team-member last text-center">
          <div class="team-img">
            <img src="/assets/img/paginas/frontend/index/team/team-5.jpg" alt="Pedro Monteiro">
            <div class="overlay">
              <div class="team-details text-center">

                <div class="socials mt-5">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Pedro Monteiro</h6>
          <span>Designer</span>
        </div>
      </div>
      <!-- end team member -->

    </div>
  </div>

</div>



@endsection
@section("javascript")
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre.js') }}"></script>
@endsection