@extends('layouts.app')

@section('title', 'Galería')

@section('content')
  <section class="gallery">
    <div class="container-fluid">
      <div class="title d-flex justify-content-center">
        <h1>Galería de fotos</h1>
      </div>
      <div class="row no-gutters" data-behavior="gallery-wrapper"></div>
    </div>
  </section>
@stop
