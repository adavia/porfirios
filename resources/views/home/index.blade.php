@extends('layouts.app')

@section('content')
  <section class="main">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-sm-6">
          <div class="banner d-flex align-items-end justify-content-center"
            role="img"
            aria-label="Gastronomia tradicional mexicana"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/tacos.jpg')">
            <div class="banner-caption">
              <h1>Gastronomía tradicional mexicana</h1>
              <p>Elaborada con los más finos ingredientes de nuestro territorio</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div id="banner-carousel-controls" class="carousel slide" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators">
              <li data-target="#banner-carousel-controls" data-slide-to="0" class="active"></li>
              <li data-target="#banner-carousel-controls" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active"
                role="img"
                aria-label="Evento porfirios 15 de septiembre"
                style="background-image: url('images/slider_1.jpg')">
              </div>
              <div class="carousel-item"
                role="img"
                aria-label="Evento porfirios 22 de septiembre"
                style="background-image: url('images/slider_2.jpg')">
              </div>
            </div>
            <!--
            <a class="carousel-control-prev" href="#banner-carousel-controls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner-carousel-controls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <section class="menu">
    <div class="title d-flex justify-content-center">
      <h1>Menú</h1>
    </div>
    <div class="container-fluid">
      <div class="nav nav-pills nav-justified d-flex justify-content-center"
        id="v-pills-tab"
        role="tablist">
        <a class="nav-link active"
        id="v-pills-starters-tab"
        data-toggle="pill"
        href="#v-pills-starters"
        role="tab"
        aria-controls="v-pills-starters"
        aria-expanded="true">Para empezar</a>
        <a class="nav-link"
        id="v-pills-salads-tab"
        data-toggle="pill"
        href="#v-pills-salads"
        role="tab"
        aria-controls="v-pills-salads"
        aria-expanded="true">Sopas y ensaladas</a>
        <a class="nav-link"
        id="v-pills-fresh-tab"
        data-toggle="pill"
        href="#v-pills-fresh"
        role="tab"
        aria-controls="v-pills-fresh"
        aria-expanded="true">Barra de frescos</a>
        <a class="nav-link"
        id="v-pills-tacos-tab"
        data-toggle="pill"
        href="#v-pills-tacos"
        role="tab"
        aria-controls="v-pills-tacos"
        aria-expanded="true">Tacos, molcajetes y tlacoyos</a>
        <a class="nav-link"
        id="v-pills-principals-tab"
        data-toggle="pill"
        href="#v-pills-principals"
        role="tab"
        aria-controls="v-pills-principals"
        aria-expanded="true">Principales</a>
        <a class="nav-link"
        id="v-pills-drinks-tab"
        data-toggle="pill"
        href="#v-pills-drinks"
        role="tab"
        aria-controls="v-pills-drinks"
        aria-expanded="true">Bebidas</a>
        <a class="nav-link"
        id="v-pills-desserts-tab"
        data-toggle="pill"
        href="#v-pills-desserts"
        role="tab"
        aria-controls="v-pills-desserts"
        aria-expanded="true">Postres</a>
      </div>
      <div class="tab-content my-3 mx-4" id="v-pills-content">
        @foreach($menu as $type => $content)
          <div class="tab-pane fade show {{$type == "starters" ? "active" : ""}}"
            id="v-pills-{{$type}}"
            role="tabpanel"
            aria-labelledby="v-pills-{{$type}}-tab">
            <div class="row menu-items">
              @foreach(array_chunk($menu[$type], 4) as $items)
                <div class="col-sm-4">
                  <ul class="list-unstyled">
                    @foreach($items as $item)
                      <li class="media">
                        <img class="d-flex mr-3 rounded-circle"
                          src="{{$item["img"]}}"
                          width="100"
                          alt="{{$item["name"]}}">
                        <div class="media-body">
                          <h5 class="mt-0 mb-1">{{$item["name"]}}</h5>
                          {{$item["description"]}}
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="reservations">
    <div class="row no-gutters">
      <div class="col-sm-6">
        <div class="title d-flex justify-content-center">
          <h1>Reservaciones</h1>
        </div>
        <form class="" action="index.html" method="POST">
          <div class="form-group">
            <select class="form-control" placeholder="Sucursal">
              <option disabled selected value>-- Sucursal --</option>
              <option>Masaryk</option>
              <option>Altavista</option>
              <option>Arcos Bosques</option>
              <option>Cancún</option>
            </select>
          </div>
          <div class="form-group">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" placeholder="Cantidad de personas">
              <div class="input-group-addon d-flex justify-content-center"><i class="fa fa-users" aria-hidden="true"></i></div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" placeholder="Fecha">
              <div class="input-group-addon d-flex justify-content-center"><i class="fa fa-calendar" aria-hidden="true"></i></div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" placeholder="Hora">
              <div class="input-group-addon d-flex justify-content-center"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            </div>
          </div>
          <button type="submit" class="btn btn-dark btn-block">
            RESERVAR UNA MESA
          </button>
        </form>
      </div>
      <div class="col-sm-6 d-none d-sm-block"
        role="img"
        aria-label="Reservaciones de mesas en restaurante">
      </div>
    </div>
  </section>
  <section class="locations">
    <div class="title d-flex justify-content-center">
      <h1>Sucursales</h1>
    </div>
    <ul class="nav nav-pills justify-content-center" id="v-pills-tab" role="tablist">
      @foreach($locations as $type => $location)
        <li class="nav-item">
          <a class="nav-link {{$type == "masaryk" ? "active" : ""}}"
            id="v-pills-{{$type}}-tab"
            data-toggle="pill"
            data-map=".{{$location["map"]}}"
            data-lat="{{$location["lat"]}}"
            data-lng="{{$location["lng"]}}"
            href="#v-pills-{{$type}}"
            role="tab"
            aria-controls="v-pills-{{$type}}"
            aria-expanded="true">{{$location["name"]}}</a>
        </li>
      @endforeach
    </ul>
    <div class="tab-content" id="v-pills-content">
      @foreach($locations as $type => $location)
        <div class="tab-pane fade {{$type == "masaryk" ? "show active" : ""}}"
          id="v-pills-{{$type}}"
          role="tabpanel"
          aria-labelledby="v-pills-{{$type}}-tab">
            <div class="row no-gutters">
              <div class="col-sm-8">
                <div id="map" class="{{$location["map"]}}">
                </div>
              </div>
            <div class="col-sm-4">
              <div class="location-info">
                <h2>{{$location["name"]}}</h2>
                <p>{{$location["address"]}}</p>
                <p>Horario: <strong>{{$location["open_hours"]}}</strong></p>
                <p>Teléfonos: <strong>{{$location["phones"]}}</strong></p>
                <p>Contacto Reservaciones: <br><strong>{{$location["contact_reservation"]}}</strong></p>
                <p>Contacto Restaurante: <br><strong>{{$location["contact_restaurant"]}}</strong></p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </section>
@stop
