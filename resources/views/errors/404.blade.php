<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>404 - Não encontrado</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/404.css') }}">
</head>

<body>
    <div class="card_erro">
        <div class="erro">
            <p>Erro 404</p>
            <p>Página não encontrada</p>
        </div>
    </div>
    <div class="garrafa">
        <img src="{{ asset('assets/img/errors/404.png') }}" alt="">
    </div>

</body>

</html>
