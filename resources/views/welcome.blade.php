<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cobertura</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Montserrat', sans-serif !important;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .logo {
                width: 140px;
                height: auto;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 40px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left">
                <img class="logo" src="images/cobertura-logo.png"/>
            </div>
                <div class="top-right links">
                    <a href="/buscar"><i class="fas fa-search"></i> Buscar Imóveis</a>
                    <a href="#"><i class="far fa-heart"></i> Favoritos</a>
                    <a href="#"><i class="fas fa-home"></i> Anuncie seu imóvel</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    <br>Cobertura
                </div>

                <div class="links">
                    <a href="https://github.com/cobertura-io/php/wiki">Documentação</a>
                    <a href="https://github.com/cobertura-io/php">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
