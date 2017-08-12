@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <div class="card-image"><img src="{{ $event->picture }}" alt="{{ $event->title }}"><span class="card-title">{{ $event->title }}</span></div>
                <div class="card-content">
                    <p class="grey ligthen-1">{{$event->date}}</p>

                    <p>{{ $event->description }}</p>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        @foreach($event->photos as $photo)
        <div class="col m3">
            <div class="card">
                <div class="card-image"><img src="{{ $photo->picture }}" alt="{{ $event->title }}"></div>
                <div class="card-content">
                    <p>{{ $photo->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="fixed-action-btn">
<a class="btn-floating btn-large red" href="{{ route('photos.create', $event->id) }}">
  <i class="material-icons">add</i>
</a>
</div>
@endsection
