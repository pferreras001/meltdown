@extends('layout')

@section('section')


<section class="videos">

  <div class="videos__container">

    <div class="videos__title title">
      <span>{{ __('videos.videos') }}</span>
      <span>{{ __('videos.videos_sub') }}</span>
    </div>


    <div class="videos__videos">


      @foreach ($videos as $item)

      <div class="videos__item">
        <h1>{{ $item->title }}</h1>
        <iframe src="https://www.youtube.com/embed/{{ $item->embed }}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>      

      @endforeach

    </div>

  </div>

</section>


@endsection