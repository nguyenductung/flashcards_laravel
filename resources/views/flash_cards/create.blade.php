@extends('layouts.default')

@section('content')
<div class="row">
  <div class="container">
    <div class="box-title">
      <h2>
        <a>Create flash card</a>
      </h2>
      {!! Form::open(['action' => ['FlashCardController@store']]) !!}
        <div class="form-group">
          <p>Word</p>
          <div class="row">
            <div class="col-sm-6 col-xs-8">
              {!! Form::text('word', '', ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <p>Pronunciation</p>
          <div class="row">
            <div class="col-sm-6 col-xs-8">
              {!! Form::text('pronunciation', '', ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <p>Meaning</p>
          <div class="row">
            <div class="col-sm-6 col-xs-8">
              {!! Form::textarea('meaning', '', ['class' => 'form-control', 'rows' => 5]) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <p>Language</p>
          <div class="row">
            <div class="col-sm-6 col-xs-8">
              {!! Form::select('language', App\FlashCard::$languages, null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <p></p>
          <div class="row">
            <div class="col-sm-6 col-xs-8">
              {!! Form::submit('Create', ['class' => 'btn btn-lg btn-success btn-submit']) !!}
            </div>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
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
