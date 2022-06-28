@extends('layout')

@section('section')

<section class="contact">

  <div class="contact__container">




    <div class="contact__title title">
      <span>{{ __('contact.contact') }}</span>
      <span>{{ __('contact.contact_sub') }}</span>
    </div>



    <div class="contact__contact">

      <div class="contact__block">
        <a href="mailto:info@meltdownofficial.com"><span class="contact__role">{{ __('contact.general') }}: </span><span class="contact__name">Meltdown</span></a>
      </div>

      <div class="contact__block">
        <a href="mailto:info@atlasartist.com"><span class="contact__role">{{ __('contact.booking') }}: </span><span class="contact__name">Rove Hernando - Atlas Artist Agency</span></a>
      </div>



      @if( Config::get('app.locale') == 'en')

      <div class="contact__block">
        <a href="mailto:j.mulle@growingrootsagency.com"><span class="contact__role">Booking Switzerland: </span><span class="contact__name">Jasmin Mulle - Growing Roots Agency</span></a>
      </div>

      @endif



      <div class="contact__block">
        <a href="mailto:mike@staysickrecordings.com"><span class="contact__role">{{ __('contact.label') }}: </span><span class="contact__name">Mike Milford - Modern Empire Music</span></a>
      </div>

    </div>






  </div>

</secton>

@endsection