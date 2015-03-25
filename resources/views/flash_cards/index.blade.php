@extends('layouts.default')

@section('content')
<div class="row">
  <div class="container">
    <div class="box-title">
      <h2>
        <a>{{ $flashCards->count() }} flash cards</a>
      </h2>
    </div>
  </div>
  @include('flash_cards.list')
</div>
@endsection
