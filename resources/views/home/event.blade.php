@extends('layouts.app')

@section('content')
  <section class="events">
    <div class="container-fluid">
      <div class="title d-flex justify-content-center">
        <h1>Eventos</h1>
      </div>
      <article class="row no-gutters">
        <div class="col-sm-6">
          <img src="/images/event_1.jpg" alt="Evento super tazón porfirios">
        </div>
        <div class="col-sm-6 event-info d-flex justify-content-center">
          <div class="align-self-center">
            <h1>Evento Super Tazón</h1>
            <p>Del 15 de agosto al 30 de diciembre</p>
            <p>Ven a disfrutarlo en todos nuestros restaurantes</p>
          </div>
        </div>
      </article>
      <article class="row no-gutters">
        <div class="col-sm-6 event-info d-flex justify-content-center">
          <div class="align-self-center">
            <h1>Final Champions League</h1>
            <p>Del 17 de enero al 26 de marzo</p>
            <p>Ven a disfrutarlo en todos nuestros restaurantes</p>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="/images/event_2.jpg" alt="Evento super tazón porfirios">
        </div>
      </article>
    </div>
  </section>
@stop
