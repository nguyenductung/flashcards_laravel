<div class="blog-post">
  @foreach($flashCards as $key => $flashCard)
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="thumbnail">
        <div class="box-top">
          <?php $color = sprintf( "#%06X", mt_rand(0, 0xFFFFFF)) ?>
          <img src="{{ asset('/img/blank.png') }}" style="background: {{ $color }} center">
          <div class="word">
            {{ $flashCard->word }}
          </div>
          <div class="mask">
            {!! link_to(action('FlashCardController@show', [$flashCard->id, 'lang' => Request::input('lang')]), 'View') !!}
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
