<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Ingresso Online</title>

  <!--CSS-->
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>

  <!--JS-->
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img class ="logo_ingresso" width="150" src="{{asset('images/logo_ingresso3.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('site.home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.products')}}">Atrações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.blog')}}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.about')}}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.contact')}}">Contato</a>
            </li>
            <div class="icon-user">
              <i class="far fa-user-circle"></i>
            </div>
          </ul>
        </div>
      </nav>

    @yield('content')

</body>
</html>