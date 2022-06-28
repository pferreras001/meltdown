@extends('layout')

@section('section')

<section class="history">

  <div class="history__container">

    <div class="history__title title">
      <span>{{ __('history.history') }}</span>
      <span>{{ __('history.history_sub') }}</span>
    </div>


    <div class="history__table">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">{{ __('history.date') }}</th>
            <th scope="col">{{ __('history.venue') }}</th>
            <th scope="col">{{ __('history.city_country') }}</th>
            <th scope="col">{{ __('history.bands') }}</th>
            <th scope="col">{{ __('history.event') }}</th>
          </tr>
        </thead>
        <tbody>

          @foreach($shows as $item)

          <tr>
            <td>{{ Illuminate\Support\Carbon::createFromFormat('Y-m-d', $item->date)->format('Y, M d') }}</td>
            <td>{{ $item->venue }}</td>
            <td>{{ $item->city . ', ' . $item->country }}</td>
            <td><span class="history__bands">{{ $item->bands }}</span></td>

            @if(empty($item->event))

            <td><button style="cursor: default;" class="button__inactive">{{ __('history.event') }}</button></td>

            @else

            <td><a href="{{ $item->event }}" target="_blank"><button>{{ __('history.event') }}</button></a></td>

            @endif
            
          </tr>

          @endforeach

        </tbody>
      </table>

      {{ $shows->links() }}
    </div>



    <div class="history__back">
      <a href="{{ route('tour') }}">{{ __('history.back') }}</a>
    </div>

  </div>

</section>

@endsection