@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('photos.store', $event->id) }}" class="col s12 m8 offset-m2" method="post" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto</span>
                        <input type="file" name="picture" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <textarea id="description" name="description" class="validate materialize-textarea" required></textarea>
                <label for="description">Description</label></div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month

    format: 'yyyy-mm-dd',
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Hoy',
    clear: 'Limpiar',
    close: 'Aceptar',
    closeOnSelect: true // Close upon selecting a date,
  });
</script>
@endsection