@extends('layouts.app')

@section('title', 'Grupos')

@section('content')
  <section class="groups">
    <div class="container-fluid">
      <div class="title d-flex justify-content-center">
        <h1>Grupos</h1>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-3">
          <img src="/images/group_1.jpg" class="rounded-circle w-75" alt="Sucursal porfirios masaryk">
          <div class="group-info">
            <h1>Masaryk</h1>
            <button type="button" name="button" class="btn btn-dark btn-block">Mapa de Piso</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Menús Grupos</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Contacto</button>
          </div>
        </div>
        <div class="col-sm-3">
          <img src="/images/group_2.jpg" class="rounded-circle w-75" alt="Sucursal porfirios altavista">
          <div class="group-info">
            <h1>Altavista</h1>
            <button type="button" name="button" class="btn btn-dark btn-block">Mapa de Piso</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Menús Grupos</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Contacto</button>
          </div>
        </div>
        <div class="col-sm-3">
          <img src="/images/group_3.jpg" class="rounded-circle w-75" alt="Sucursal porfirios arcos bosques">
          <div class="group-info">
            <h1>Arcos Bosques</h1>
            <button type="button" name="button" class="btn btn-dark btn-block">Mapa de Piso</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Menús Grupos</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Contacto</button>
          </div>
        </div>
        <div class="col-sm-3">
          <img src="/images/group_4.jpg" class="rounded-circle w-75" alt="Sucursal porfirios cancun">
          <div class="group-info">
            <h1>Cancún</h1>
            <button type="button" name="button" class="btn btn-dark btn-block">Mapa de Piso</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Menús Grupos</button>
            <button type="button" name="button" class="btn btn-dark btn-block">Contacto</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
