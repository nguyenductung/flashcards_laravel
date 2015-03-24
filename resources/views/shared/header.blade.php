<nav class="navbar">
  <div class="container">
    <div id="logo">
      {!! link_to(action('FlashCardController@index'), 'Flash Cards') !!}
    </div>
    <div class="navbar-search">
      <div class="btn-login">
        {!! link_to(action('FlashCardController@create'), 'Create') !!}
      </div>
    </div>
  </div>
</nav>
<nav class="navbar-main">
  <div class="container">
    <div class="cat-title">Category</div>
    <ul class="list-menu">
      <li class="all category-active">
        {!! link_to(action('FlashCardController@index'), 'All') !!}
      </li>
      <li class="en category-active">
        {!! link_to(action('FlashCardController@index', ['lang' => 'en']), 'English') !!}
      </li>
      <li class="ja category-active">
        {!! link_to(action('FlashCardController@index', ['lang' => 'ja']), 'Japanese') !!}
      </li>
    </ul>
  </div>
</nav>
