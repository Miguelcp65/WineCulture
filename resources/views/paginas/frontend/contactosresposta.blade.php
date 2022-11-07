<!DOCTYPE html>
<html>

<head>
    <title>Wineculture</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style>
        .header_mail {
            background-color: #5f2735 !important;
            width: 100%;
            height: 100px;
            border-radius: 5px 5px 0px 0px;
        }

        .titulo_header {
            color: white;
            margin-left: 50px;
            line-height: 100px
        }

        .corpo_mail {
            margin: auto;
            width: 70%;
            padding: 10px;
        }

        .background {
            background-color: rgb(238, 238, 238);
        }

        .conteudo {
            background-color: white;
            border-radius: 5px 5px 5px 5px;
            font-family: 'Lato';
        }

        .conteudo_mail {
            margin-top: 40px;
            margin-left: 50px;
            padding-bottom: 40px;
            color: #737373 !important;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="corpo_mail">
            <div class="conteudo">
                <header class="header_mail">
                    <h1 class="titulo_header">
                        Obrigado por nos contactar
                    </h1>
                </header>
                <div class="conteudo_mail">
                    <p>Caro {{ $nome }},</p>
                    <p>A resposta à sua pergunta:</p>
                    <p>"{{ $pergunta }}"</p>

                    <p>É a seguinte:</p>
                    <p>{!! $resposta !!}</p>

                    <p>Com os melhores cumprimentos,
                        <br>A Equipa do WineCulture
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
