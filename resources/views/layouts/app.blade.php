<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Porfirios') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/logo_favicon.png') }}">
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('layouts.common.overlay')
    <header>
      <a href="{{route("home")}}">
        <img src="/images/logo.png" class="mx-auto d-block" alt="Logo Porfirios">
      </a>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-main">
      <button class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#nav-dropdown"
        aria-controls="nav-dropdown"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="nav-dropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">MENÚ <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">RESERVACIONES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("groups")}}">GRUPOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("events")}}">EVENTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("gallery")}}">GALERÍA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SUCURSALES</a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-1">
            <img src="images/logo_icon.png" class="mx-auto d-block" alt="Logo Porfirios">
          </div>
          <div class="col-sm-7">
            <ul class="list-inline mt-4">
              <li class="list-inline-item">Copyright © PORFIRIO'S 2017.</li>
              <li class="list-inline-item">Facturación</li>
              <li class="list-inline-item">Aviso de privacidad</li>
              <li class="list-inline-item">Bolsa de trabajo</li>
              <li class="list-inline-item">Grupo Andersons</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <div class="mt-4 d-flex justify-content-center">
              <img src="images/fb.png" class="ml-1" alt="Facebook">
              <img src="images/ig.png" class="ml-1" alt="Instagram">
              <img src="images/ta.png" class="ml-1" alt="Trip Advisor">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <!-- Scripts -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVRXM9nYKwEen8JeFFi7WgC_9foBNDEVQ"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
