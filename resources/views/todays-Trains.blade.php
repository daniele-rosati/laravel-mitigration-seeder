@extends('layouts.app')

@section('content')
<div class="container">
    <h1> treni di oggi</h1>
    @foreach ($trains as $train)
    <div>
        <div>company: {{ $train->company }}</div>
        <div>città di partenza: {{ $train->departure_station }} - orario di partenza:  {{ $train->departure_datetime }} </div>
        <div> città d'arrivo:  {{ $train->arrival_station }}  - orario di arrivo:  {{ $train->arrival_datetime }}  </div>
    </div>
    @endforeach
</div>
@endsection