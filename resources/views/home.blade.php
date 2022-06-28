@extends('layout')

@section('section')

<section class="home">

  <div class="home__container">


    <!-- Video -->

    <div class="home__video ">
      <iframe src="https://www.youtube.com/embed/NTRN9koXPGg?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <!-- Video -->





    <!-- Menu -->

    <div class="home__menu">
      <ul class="list-group list-group-horizontal">
        <li class=""><a href="{{ route('merch') }}"><h1>{{ __('home.merch') }}</h1></a></li>
        <li class=""><a href="{{ route('tour') }}"><h1>{{ __('home.tour') }}</h1></a></li>
        <li class=""><a href="javascript: document.body.scrollIntoView(false);"><h1>{{ __('home.subscribe') }}</h1></a></li>
      </ul>
    </div>

    <!-- Menu -->






    <!-- Spotify -->

    <div class=home__spotify>
      <h1>{{ __('home.follow') }}</h1>
      <iframe class="spotify__iframe" src="https://open.spotify.com/follow/1/?uri=spotify:artist:1wDfoSmnEVDw3D1hgzi4v7&size=detail&theme=dark" width="300" height="106" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>

      <div class="home__sm mt-5">
        <ul class="list-group list-group-horizontal">
          <li class=""><a href="https://www.facebook.com/meltdowntaldea/" target="_blank"><?php require('imports/svg/facebook.svg') ?></a></li>
          <li class=""><a href="https://www.instagram.com/meltdownband/?hl=es" target="_blank"><?php require('imports/svg/instagram.svg') ?></a></li>
          <li class=""><a href="https://open.spotify.com/artist/1wDfoSmnEVDw3D1hgzi4v7" target="_blank"><?php require('imports/svg/spotify.svg') ?></a></li>
          <li class=""><a href="https://www.youtube.com/channel/UCDkyNOMrkprcsUsArS9foFw" target="_blank"><?php require('imports/svg/youtube.svg') ?></a></li>
        </ul>          
      </div>

    </div>

    <!-- Spotify -->

  </div>

</section>

@endsection