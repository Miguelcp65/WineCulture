@extends("paginas.frontend.layout")

@section('title', 'Início')

@section("links")
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/boxicons/css/boxicons.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/venobox/venobox.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/index.css') }}">
@endsection

@section("content")

@if (session('info') == "novo_registo")
<script>
    toastr.success('Obrigado por juntar-se a nós!', 'Bem-Vindo');
    toastr.warning('Verifique o seu Email para confirmar a sua conta!', 'Email Enviado');
</script>
@endif
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('/assets/img/paginas/frontend/index/slide/slide-1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Bem-Vindo ao <span>WineCulture</span></h2>
                            <p class="animate__animated animate__fadeInUp">Seja Bem-Vindo ao WineCulture, uma ideia formada para o ajudar a entrar na área da vinicultura.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('/assets/img/paginas/frontend/index/slide/slide-2.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">A Nossa Loja</h2>
                            <p class="animate__animated animate__fadeInUp">Visite a nossa loja "WineCulture" onde pode comprar acessórios de roupa, de escritório, pessoais, de vinho e também por fim acessórios de covid-19.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('/assets/img/paginas/frontend/index/slide/slide-3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">As Nossas Receitas</h2>
                            <p class="animate__animated animate__fadeInUp">A associação WineCulture dispõe de vaárias receitas no qual pode acompanhar com o melhor vinho.</p>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="/assets/img/paginas/frontend/index/about.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/embed/35Q00Tz6NnQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2>Sobre Nós</h2>
                        <p>WineCulture é uma instituição sem fins lucrativos que procura dar a conhecer ao seu público uma cultura aprofundade sobre a vinicultura, uma área bastante importante em Portugal. Venha conhecer-nos!</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="/contactos">Contacte-nos</a></h4>
                        <p class="description">Procure mais informações na nossa página dos Contactos!</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="http://wineculture.test/loja/" target="_blank">Loja</a></h4>
                        <p class="description">Procure mais informações na nossa loja e o que ela o pode dispôr!</p>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->


    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="icofont-simple-smile" style="color: #20b38e;"></i>
                        <span data-toggle="counter-up">232</span>
                        <p>Clientes Satisfeitos</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="icofont-document-folder" style="color: #c042ff;"></i>
                        <span data-toggle="counter-up">10</span>
                        <p>Projetos</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="icofont-live-support" style="color: #46d1ff;"></i>
                        <span>24/7</span>
                        <p>Apoio ao Cliente</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
                        <span data-toggle="counter-up">5</span>
                        <p>Membros de Equipa</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2 class="serviços">Os Nossos Serviços</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="icofont-newspaper"></i></div>
                    <h4 class="title"><a href="/sobre_vinhos">Tudo Sobre Vinhos</a></h4>
                    <p class="description">Oferecemos uma página completa e cheia de informação!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="icofont-grapes"></i></div>
                    <h4 class="title"><a href="/vinhos">Melhores Vinhos</a></h4>
                    <p class="description">Todos os vinhos expostos nos site são premium e certificados pela team WineCulture</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-support-faq"></i></div>
                    <h4 class="title"><a href="/faq">FaQ</a></h4>
                    <p class="description">Podes esclarecer todas as duvidas e mais alguma!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-fast-delivery"></i></div>
                    <h4 class="title"><a href="">Entregas Rápidas</a></h4>
                    <p class="description">O nosso serviço de excelencia garante uma entrega no máximo de 48h!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="icofont-culinary"></i></div>
                    <h4 class="title"><a href="/receitas">Melhores Receitas</a></h4>
                    <p class="description">Dispomos das melhores receitas para acompanhar com um certo tipo de vinho-</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon"><i class="icofont-shopify"></i></div>
                    <h4 class="title">
                        <a href="http://wineculture.test/loja/" target="_blank">Loja</a>
                    </h4>
                    <p class="description">Obtemos de uma loja para que possam comprar acessórios de moda, de escritório, pessoais, de vinho e de covid-19.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Portfólio</h2>
                <p>Neste Portfólio dispomos de algumas imagens que achamos mais relevantes ao objetivo da associação WineCulture.</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todos</li>
                        <li data-filter=".filter-app">Vinhos</li>
                        <li data-filter=".filter-card">Receitas</li>
                        <li data-filter=".filter-web">Marcas</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/vin-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Calibre</h4>
                            <p>Vinhos</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/vin-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/marc-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Argilla Wines</h4>
                            <p>Marcas</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/marc-1.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/vin-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>São Miguel</h4>
                            <p>Vinhos</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/vin-2.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/rec-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Queixadas</h4>
                            <p>Receitas</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/rec-2.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/marc-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Herdade Grande</h4>
                            <p>Marcas</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/marc-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/vin-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Soalheiro</h4>
                            <p>Vinhos</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/vin-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/rec-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Chanfana de Peru</h4>
                            <p>Receitas</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/rec-1.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/rec-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ensopado de Vaca</h4>
                            <p>Receitas</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/rec-3.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/paginas/frontend/index/portfolio/marc-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Vale de Cavalos</h4>
                            <p>Marcas</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/paginas/frontend/index/portfolio/marc-3.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section("javascript")

<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/index.js') }}"></script>
@endsection
