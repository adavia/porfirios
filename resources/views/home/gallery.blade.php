@extends('layouts.app')

@section('content')
  <section class="gallery">
    <div class="container-fluid">
      <div class="title d-flex justify-content-center">
        <h1>Galería de fotos</h1>
      </div>
      <div class="row no-gutters">
        @if(!empty($items))
          @foreach($items as $key => $item)
            <div class="col-sm-3">
              <img src="{{ $item["images"]["standard_resolution"]["url"] }}"
                class="w-100 img-fluid"
                alt="{{ isset($item["caption"]["text"]) ? $item["caption"]["text"] : "Restaurante Porfirios" }}"/>
            </div>
          @endforeach
   			@else
          <h2 class="text-center">No se encontraron imágenes</h2>
   		  @endif
      </div>
    </div>
  </section>
@stop
