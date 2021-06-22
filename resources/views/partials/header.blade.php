<header class="container">
  <a href="#">
    <img src="{{asset('img/dc-logo.png')}}" alt="logo">
  </a>
  <div class="box-list">
    <ul>
      <li>
        <a class="{{(request()->is('characters')) ? 'active' : ''}}" href="{{url('characters')}}">CHARACTERS</a>
      </li>
      <li>
        <a class="{{(request()->is('/')) ? 'active' : ''}}" href="/">COMICS</a>
      </li>
      <li>
        <a class="{{(request()->is('movies')) ? 'active' : ''}}" href="{{url('movies')}}" >MOVIES</a>
      </li>
      <li>
        <a class="{{(request()->is('tv')) ? 'active' : ''}}" href="{{url('tv')}}" >TV</a>
      </li>
      <li>
        <a class="{{(request()->is('games')) ? 'active' : ''}}" href="{{url('games')}}"  >GAMES</a>
      </li>
      <li>
        <a class="{{(request()->is('videos')) ? 'active' : ''}}" href="{{url('videos')}}" >VIDEOS</a>
      </li>
      <li>
        <a class="{{(request()->is('fans')) ? 'active' : ''}}" href="{{url('fans')}}" >FANS</a>
      </li>
      <li>
        <a class="{{(request()->is('news')) ? 'active' : ''}}" href="{{url('news')}}">NEWS</a>
      </li>
      <li>
        <a class="{{(request()->is('shop')) ? 'active' : ''}}" href="{{url('shop')}}">SHOP</a>
      </li>
    </ul>
  </div>
</header>