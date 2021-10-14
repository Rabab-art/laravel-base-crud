@extends('layouts.main')

@section('title', 'cover')

@section('section_id', 'comics')

@section( 'content')

<section class="">
    <h1 class="mt-4 mp-5 text-center">DC Comics Book </h1>
    <section class="row">
        
            <div class="card" style="width: 18rem;">
                @forelse($comics as $comic)
                @if($comic->thumb)
                <img src="{{$comic->thumb}}" alt="" class="img-fluid me-2">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->series}}</p>
                    <a href="{{route ('comics.show', $comic->id)}}" class="btn btn-primary">MORE</a>
                </div>
                @empty
                @endforelse
            </div>
       
    </section>
    <h2 class=" mp-5 text-center">Non è diponibile...</h2>
    {{-- {{$comics ->links()}} --}}
    @endsection
</section>