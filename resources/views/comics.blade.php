@extends('layouts.main')

@section('content')
<main class="container">
  <button class="current">CURRENT SERIES</button>
  <ul>
    @foreach ( $cards as $card)
      <li>
        <a href="#">
          <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
          <h4>{{$card['series']}}</h4>
        </a>
      </li> 
    @endforeach
  </ul>

  <button>LOAD MORE</button>

</main>

<section class="line-main container">
  <ul>
    <li>
      <a href="#">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
        <h4>DIGITAL COMICS</h4>
      </a>
    </li>
    <li>
      <a href="#">
        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
        <h4>DIGITAL COMICS</h4>
      </a>
    </li>
    <li>
      <a href="#">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
        <h4>DIGITAL COMICS</h4>
      </a>
    </li>
    <li>
      <a href="#">
        <img class="special-img-shop" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
        <h4>DIGITAL COMICS</h4>
      </a>
    </li>
    <li>
      <a href="#">
        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
        <h4>DIGITAL COMICS</h4>
      </a>
    </li>
  </ul>
</section>
@endsection