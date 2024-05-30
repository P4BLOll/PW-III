@extends('layouts.estrutura')

@section('titulo', "Home")

@section('container')

<div class="container-fluid">
<div class="row text-center align-items-center justify-content-center" style="height: 500px; background-image: url('imgs/7207a45676cc937dbc8c446bc911e0a1-photoaidcom-darken.jpg'); background-size: cover;">
<p class="fs-1 fw-bold">A ARTE DA VIDA</p>
</div>


<hr class="featurette-divider" style="margin: 4rem 0 4rem 0;">


  <div class="container marketing">

  <div class="row featurette">
  <div class="col-md-7 d-flex align-items-center justify-content-center">
    <div>
      <h2 class="featurette-heading fw-normal lh-1">AUTO-RETRATO, <span class="text-body-secondary">VINCENT VAN GOGH.</span></h2>
      <p class="lead">Os autorretratos de Vincent van Gogh são expressões vívidas de sua busca por identidade e autoconhecimento. Com cores intensas e pinceladas emotivas, ele capturou sua luta interior e refletiu sobre temas universais como dor e esperança. Seu legado duradouro continua a inspirar e intrigar espectadores em todo o mundo, oferecendo uma visão única da mente e do coração de um dos artistas mais icônicos da história.</p>
    </div>
  </div>
  <div class="col-md-5">
  <figure class="figure">
  <img src="{{asset('imgs/747c900bccccf9162153c873cf26c3fc.jpg')}}" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Auto-Retrato, 1889.</figcaption>
</figure>
  </div>
</div>


  <hr class="featurette-divider" style="margin: 4rem 0 4rem 0;">

    <div class="row featurette">
    <div class="col-md-7 order-md-2 d-flex align-items-center justify-content-center">
      <div>
        <h2 class="featurette-heading fw-normal lh-1">MULHER COM SOMBRINHA, <span class="text-body-secondary">CLAUDE MONET.</span></h2>
        <p class="lead">"A Mulher com Sombrinha" é uma obra icônica de Claude Monet, pintada em 1875, que retrata sua esposa, Camille Doncieux, e seu filho, Jean, em um campo aberto com um guarda-sol azul. Monet captura os efeitos da luz natural com pinceladas soltas e impressionistas, destacando a sombrinha azul como um ponto vibrante contra o cenário verde. Além de uma representação visualmente impressionante, a pintura evoca a vida cotidiana na França do século XIX, transmitindo tranquilidade e serenidade. Como muitas obras de Monet, "A Mulher com Sombrinha" celebra a beleza da natureza e da vida cotidiana, solidificando o legado do artista como um dos maiores da história.</p>
      </div>
    </div>
    <div class="col-md-5 order-md-1">
    <figure class="figure">
  <img src="{{asset('imgs/287158907e9582e913a0ecaf32500625.jpg')}}" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Mulher com sombrinha, 1875.</figcaption>
</figure>
    </div>
  </div>


    <hr class="featurette-divider" style="margin: 4rem 0 4rem 0;">

    <div class="row featurette">
  <div class="col-md-7 d-flex align-items-center justify-content-center">
    <div>
      <h2 class="featurette-heading fw-normal lh-1">O FILHO DO HOMEM, <span class="text-body-secondary">RENÉ MAGRITTI.</span></h2>
      <p class="lead">"O Filho do Homem" é uma pintura surrealista de René Magritte, concluída em 1964. Nela, um homem de terno e gravata tem o rosto obscurecido por uma maçã verde flutuante. A obra desafia a interpretação tradicional, convidando os espectadores a questionar a identidade e a natureza da figura retratada. A presença da maçã cria uma atmosfera enigmática e provocativa, simbolizando diferentes significados, desde a tentação até a complexidade da condição humana.</p>
    </div>
  </div>
  <div class="col-md-5">
  <figure class="figure">
  <img src="{{asset('imgs/061e8c2857af84f137edfe9b795255da.jpg')}}" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">O Filho do Homem, 1964.</figcaption>
</figure>
  </div>
</div>

    <hr class="featurette-divider" style="margin: 4rem 0 4rem 0;">

  </div>
  </div>

@endsection