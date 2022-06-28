@extends('layout')

@section('section')

<section class="media">


  <div class="media__container">
    

    <div class="media__title title">
      <span>{{ __('media.download') }}</span>
    </div>


    <div class="media__download">
      <ul class="list-group">
        <a href="downloads/meltdown_logos.zip" target="_blank"><li class="list-group-item">{{ __('media.logo') }}</li></a>
        <a href="downloads/meltdown_promoPhotos.zip" target="_blank"><li class="list-group-item">{{ __('media.photos') }}</li></a>
        <a href="downloads/meltdown_pressKitt.zip" target="_blank"><li class="list-group-item">{{ __('media.press') }}</li></a>
        <a href="downloads/meltdown_technicalRider.pdf" target="_blank"><li class="list-group-item">{{ __('media.rider') }}</li></a>
      </ul>
    </div>

  </div>


</section>

@endsection