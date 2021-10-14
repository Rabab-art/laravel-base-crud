@extends('layouts.main')

@section('title', 'cover')

@section('section_id', 'comics')

@section( 'content')

<section class="">
    <div class="card-title d-flex justify-content-between align-items-center m-4">
        <h1 class=" text-center">DC Comics Book </h1>
        <form method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cerca fumetto..." name="search" />
                <button class="btn btn-secondary" type="submit">Cerca</button>
            </div>
        </form>
    </div>
    <div class="card m-3 " style="width: 18rem;">
        @forelse($comics as $comic)
        @if($comic->thumb)
        <img src="{{$comic->thumb}}" alt="" class="img-fluid me-2">
        @endif
        <div class="card-body">
            <h4 class="card-title">{{$comic->title}}</h4>
            <p class="card-text">{{$comic->series}}</p>
            <a href="{{route ('comics.show', $comic->id)}}" class="btn btn-primary">MORE</a>
        </div>
    </div>
    @empty
    <h2 colspan="5" class=" mp-5 text-center">
        Non è diponibile @if(!empty ($search))per {{ $search }}@endif


    </h2>
    @endforelse



    {{-- {{$comics ->links()}} --}}
    @endsection
</section>