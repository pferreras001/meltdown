@extends('layout')

@section('section')

<section class="tour">

  <div class="tour__container">

    <div class="tour__title title">
      <span>{{ __('tour.tour') }}</span>
      <span>{{ __('tour.tour_sub') }}</span>
    </div>

    @if(!$shows->isEmpty())

    <div class="tour__table">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">{{ __('tour.date') }}</th>
            <th scope="col">{{ __('tour.venue') }}</th>
            <th scope="col">{{ __('tour.city_country') }}</th>
            <th scope="col">{{ __('tour.bands') }}</th>
            <th scope="col">{{ __('tour.event') }}</th>
            <th scope="col">{{ __('tour.tickets') }}</th>
          </tr>
        </thead>
        <tbody>

          @foreach($shows as $item)

          <tr>
            <td>{{ Illuminate\Support\Carbon::createFromFormat('Y-m-d', $item->date)->format('D, M d') }}</td>
            <td>{{ $item->venue }}</td>
            <td>{{ $item->city . ', ' . $item->country }}</td>
            <td><span class="tour__bands">{{ $item->bands }}</span></td>

            @if(empty($item->event))

            <td><button style="cursor: default;" class="button__inactive">{{ __('tour.event') }}</button></td>

            @else

            <td><a href="{{ $item->event }}" target="_blank"><button>{{ __('tour.event') }}</button></a></td>

            @endif

            @if(empty($item->tickets))

            <td><button style="cursor: default;" class="button__inactive">{{ __('tour.tickets') }}</button></td>

            @else

            <td><a href="{{ $item->tickets }}" target="_blank"><button>{{ __('tour.tickets') }}</button></a></td>

            @endif
            
          </tr>

          @endforeach

        </tbody>
      </table>

    @else

    <div class="tour__noshows">
      {{ __('tour.more') }}
    </div>

    @endif

    </div>



    <div class="tour__history">
      <a href="{{ route('history') }}">{{ __('tour.history') }}</a>
    </div>

  </div>

</section>

@endsection