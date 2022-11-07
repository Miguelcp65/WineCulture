<!doctype html>
<html>

<head>
    <title>WineCulture - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/settings.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">
    @yield("links")

    <link rel="shortcut icon" href="{{ URL::to('/') }}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ URL::to('/') }}/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    @include('includes.frontend.navbar')
    <div class="mainncontainer" style="position: relative; min-height: 75vh; box-sizing: border-box;">

        @include('includes.frontend.settings')
        @yield("content")
    </div>

    <a href="# " class="back-to-top "><i class="icofont-simple-up "></i></a>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ URL::asset('assets/js/layouts/frontend/navbar.js') }}"></script>
    <script src="{{ URL::asset('assets/js/layouts/frontend/settings.js') }}"></script>

    <footer class="footer-bs" styles="width:100%">
        @include('includes.frontend.footer')
    </footer>
    @yield("javascript")

</body>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });

</script>

</html>
