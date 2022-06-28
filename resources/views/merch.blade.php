@extends('layout')

@section('section')

<section class="merch">

  <div class="merch__container">

    <div class="merch__title title">
      <span>{{ __('merch.merch') }}</span>
      <span>{{ __('merch.merch_sub') }}</span>
    </div>


    <div class="merch__grid">

    @foreach ($products as $item)

      <a href="{{ $item->url }}">
        <div class="merch__itembox">
          <img src="https://admin.meltdownofficial.com{{ $item->path }}" alt="">
          <div>
            <span>{{ $item->name }}</span>
            <span>{{ $item->price }}€</span>
          </div>
        </div>
      </a>

    @endforeach

    </div>


  </div>

</section>

@endsection