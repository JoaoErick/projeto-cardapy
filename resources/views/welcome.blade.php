<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/main-logo.ico') }}" type="image/x-icon">
    <title>Cardapy</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-md-3 nav-col">
                <a href="https://twitter.com/EcompJr" target="_blank">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a href="https://www.facebook.com/ecompjr.uefs/" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/ecompjr/" target="_blank">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a href="https://github.com/EcompJr" target="_blank">
                    <i class="fab fa-github-square"></i>
                </a>
            </div>
            <div class="col-md-3">
              <img src="{{ asset('assets/main-logo.png') }}" alt="Cardapy Logo">
              <h3>CARDAPY</h3>
            </div>
            <div class="col-md-3">
                <a class="help" href="">Ajuda</a>
                <a class="help" href="">Suporte</a>
            </div>
        </div>
        <div class="row justify-content-center description">
            <h4>Encontre os cardápios de todos os restaurantes da sua região.</h4>
        </div>

        <!-- Ícones -->
        <div class="row justify-content-center icons">
            <div class="col-md-2">
                <img src="{{ asset('assets/icon-1.png') }}" alt="" width="130px">
            </div>
            <div class="col-md-2">
                <img src="{{ asset('assets/icon-2.png') }}" alt="" width="130px">
            </div>
            <div class="col-md-2">
                <img src="{{ asset('assets/icon-4.png') }}" alt="" width="130px">
            </div>
            <div class="col-md-2">
                <img src="{{ asset('assets/icon-3.png') }}" alt="" width="130px">
            </div>
        </div>

        <!-- Filter -->
        <div class="container">
        <div class="row justify-content-around icons">
            <div class="col-md-1">
                <a href="">
                    <span>Todos</span>
                </a>
            </div>
            <div class="col-md-1">
                <a href="">
                    <span>Pizza</span>
                </a>
            </div>
            <div class="col-md-1">
                <a href="">
                    <span>Burguer</span>
                </a>
            </div>
            <div class="col-md-1">
                <a href="">
                    <span>Almoço</span>
                </a>
            </div>
            <div class="col-md-1">
                <a href="">
                    <span>Sushi</span>
                </a>
            </div>
            <div class="col-md-1">
                <a href="">
                    <span>Salgados</span>
                </a>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ asset('assets/restaurante-2.jpg') }}" alt="" height="400px">
              </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm card-alt">
                  <img class="card-img-top" src="{{ asset('assets/restaurante-3.jpg') }}" alt="" height="400px">
                </div>
            </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ asset('assets/restaurante-1.jpg') }}" alt="" height="400px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ asset('assets/restaurante-2.jpg') }}" alt="" height="400px">
              </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm card-alt">
                  <img class="card-img-top" src="{{ asset('assets/restaurante-3.jpg') }}" alt="" height="400px">
                </div>
            </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ asset('assets/restaurante-1.jpg') }}" alt="" height="400px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ asset('assets/restaurante-2.jpg') }}" alt="" height="400px">
              </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm card-alt">
                  <img class="card-img-top" src="{{ asset('assets/restaurante-3.jpg') }}" alt="" height="400px">
                </div>
            </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ asset('assets/restaurante-1.jpg') }}" alt="" height="400px">
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>