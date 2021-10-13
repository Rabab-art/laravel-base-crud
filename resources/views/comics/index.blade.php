@extends('layouts.main')

@section('title', 'cover')

@section('section_id', 'comics')

@section( 'content')
<h1>DC Comics Book </h1>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <ul>
            <li scope="row">Title</li>
            <li scope="row">Description</li>
            <li scope="row">Price</li>
            <li scope="row">Series</li>
            <li scope="row">Type</li>
        </ul>
        <div>
        @forelse($comics as $comic)
        @if($comic->thumb)
        <img src="{{$comic->thumb}}" alt="" class="img-fluid me-2">
        @endif
   
             <ul>
                 <li scope="row">{{$comic->title}}</li>
                 <li scope="row">{{$comic->description}}</li>
                 <li scope="row">{{$comic->price}}</li>
                 <li scope="row">{{$comic->series}}</li>
                 <li scope="row">{{$comic->type}}</li>
             </ul>
        @empty
        <h2 class="text-center mp-5">Non è diponibile...</h2>
        @endforelse
        </div>
    </div>
</div>
@endsection