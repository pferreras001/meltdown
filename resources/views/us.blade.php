@extends('layout')

@section('section')

<section class="us">

<div class="us__container">

  <div class="us__logo">
    <?php require('imports/svg/gear.svg') ?>
  </div>


  <div class="us__text">
    <p>

      {!! __('us.text') !!}

    </p>
  </div>

</div>

</section>

@endsection