@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($events as $event)
        <div class="col s6 m4">
            <div class="card">
                <div class="card-image"><img src="{{ $event->picture }}" alt="{{ $event->title }}"><span class="card-title">{{ $event->title }}</span></div>
                <div class="card-content">
                    <p class="grey ligthen-1">{{$event->date}}</p>

                    <p>{{ $event->description }}</p>
                </div>
                <div class="card-action"><a href="{{ route('events.show', $event->id) }}">Ver detalles</a></div>
            </div>
        </div>

    @endforeach
    </div>
</div>

<div class="fixed-action-btn">
<a class="btn-floating btn-large red" href="{{ route('events.create') }}">
  <i class="material-icons">add</i>
</a>
</div>
@endsection
