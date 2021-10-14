@extends('layouts.main');

@section('series', $comic->series)

@section('section-id', 'comics.show')

@section( 'content')

<div class="card-title">
    <h4 class="text-center m-3">{{$comic->title}}</h4>
    <hr>
</div>
<div class="card-body row">
    <div class="col-3 text-center">
        @if($comic->thumb)
        <img class="img-fluid" src="{{$comic->thumb}}" alt="">
        @endif
    </div>
    <div class="col-9">
        <h6>{{$comic->type}}</h6>
        <p>{{ $comic->description}}</p>
        <div> <strong>Prezzo</strong>{{$comic->price}}</div>

    </div>

</div>

@endsection