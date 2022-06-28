<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="img/layout/gear.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    {!! SEO::generate() !!}
    
  </head>
  <body>






<!-- Navbar -->

    <script>
      $(window).scroll(function() {
        $('.navbar-default').toggleClass('scrolled', $(this).scrollTop() > 50);
      });
    </script>

    <nav class="navbar navbar-default navbar-expand-lg navbar-dark bg-light fixed-top">
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=='home') active @endif" href="{{ route('home') }}">{{ __('layout.home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=='merch') active @endif" href="{{ route('merch') }}">{{ __('layout.merch') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Request::route()->getName()=='tour') active @endif" href="{{ route('tour') }}">{{ __('layout.tour') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Request::route()->getName()=='videos') active @endif" href="{{ route('videos') }}">{{ __('layout.videos') }}</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link  @if(Request::route()->getName()=='music') active @endif" href="{{ route('music') }}">{{ __('layout.music') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Request::route()->getName()=='us') active @endif" href="{{ route('us') }}">{{ __('layout.us') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link { @if(Request::route()->getName()=='contact') active @endif" href="{{ route('contact') }}">{{ __('layout.contact') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('layout.language') }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="{{ url('locale/en') }}">English</a>
              <a class="dropdown-item" href="{{ url('locale/es') }}">Castellano</a>
              <a class="dropdown-item" href="{{ url('locale/eus') }}">Euskara</a>
            </div>
          </li>
        </ul>
      </div>
      <?php require('imports/svg/gear.svg') ?>
    </nav>

<!-- Navbar -->







<!-- Container -->

    <div class="">

      @yield('section')

    </div>

<!-- Container -->







<!-- Footer -->

    <div class="footer">
      <div class="footer__container container">
        <div class="footer__sponsors">
          <ul class="list-group list-group-horizontal">
            <li class=""><img class="" src="/img/footer/atlas.png" alt=""></li>
            <li class=""><img class="" src="/img/footer/gr.png" alt=""></li>
            <li class=""><img class="" src="/img/footer/hxc.png" alt=""></li>
            <li class=""><img class="" src="/img/footer/me.png" alt=""></li>
          </ul>
        </div>
        <div class="footer__tinf">
          <span>Meltdown</span> · <span>This is now Forever</span>
        </div>




        <div class="footer__subscription" id="subscription">
          <h1>{{ __('layout.subscribe') }}</h1>
          <form action="{{ route('subscriptions.create') }}" method="POST">
            @csrf
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="{{ __('layout.name') }}" value="{{ old('name') }}">
            <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="{{ __('layout.email') }}" value="{{ old('email') }}">
            <button type="submit" class="btn btn-primary">{{ __('layout.subscribe') }}</button>

            @if(session('success'))

            <div class="footer__success">{{ __('layout.success') }}</div>

            @endif

            @if(session('duplicate'))

            <div class="footer__success">{{ __('layout.duplicate') }}</div>

            @endif

            @error('name')

            <div class="footer__error">{{ __('layout.name_err') }}</div>

            @enderror

            @error('email')

            <div class="footer__error">{{ __('layout.email_err') }}</div>

            @enderror

          </form>
        </div>






        <div class="footer__sm mt-5">
          <ul class="list-group list-group-horizontal">
            <li class=""><a href="https://www.facebook.com/meltdowntaldea/" target="_blank"><?php require('imports/svg/facebook.svg') ?></a></li>
            <li class=""><a href="https://www.instagram.com/meltdownband/?hl=es" target="_blank"><?php require('imports/svg/instagram.svg') ?></a></li>
            <li class=""><a href="https://open.spotify.com/artist/1wDfoSmnEVDw3D1hgzi4v7" target="_blank"><?php require('imports/svg/spotify.svg') ?></a></li>
            <li class=""><a href="https://www.youtube.com/channel/UCDkyNOMrkprcsUsArS9foFw" target="_blank"><?php require('imports/svg/youtube.svg') ?></a></li>
          </ul>          
        </div>
        <div class="footer__copyright">
          <span>©{{ now()->year }}  </span><span>Meltdown</span>
        </div>
      </div>
    </div>

<!-- Footer -->




<!-- Cookies -->

  @include('cookieConsent::index')

<!-- Cookies -->

    
    




<!-- Go to Bottom JQuery -->


    <script>
    $( document ).ready(function() {

        @error('name')

        $(document).scrollTop($(document).height());

        @enderror

        @error('email')

        $(document).scrollTop($(document).height());

        @enderror

        @if(session('success'))

        $(document).scrollTop($(document).height());

        @endif

        @if(session('duplicate'))

        $(document).scrollTop($(document).height());

        @endif
    });
 
    </script>


<!-- Go to Bottom JQuery -->

    
  </body>
</html>