@extends('layouts.default')

@section('jumbotron')
  <div class="jumbotron">
    <div class="container">
      <h1>{{ $flashCard->word }}</h1>
      <p class="pronunciation">{{ $flashCard->pronunciation }}</p>
      <p class="meaning">{{ $flashCard->meaning }}</p>
    </div>
  </div>
@endsection

@section('content')
<div class="row">
  <div class="container">
    <div class="box-title">
      <h2>
        <a>Other flash cards</a>
      </h2>
    </div>
  </div>
  @include('flash_cards.list')
</div>
@endsection
