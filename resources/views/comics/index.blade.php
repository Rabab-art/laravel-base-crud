@extends('layouts.main')

@section('title', 'cover')

@section('section_is', 'comics')

@section( 'content')
<h1>DC Comics Book </h1>
<div class="card" style="width: 18rem;">
   
    @if (!empty ($comics))
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <ul>
            <li scope="row">Title</li>
            <li scope="row">Description</li>
            <li scope="row">Price</li>
            <li scope="row">Series</li>
            <li scope="row">Type</li>
        </ul>
        <div>
            @foreach($comics as $comic)
            @endforeach
        </div>
    </div>
    @else
    <h2 class="text-center mp-5">Non è diponibile...</h2>
    @endif
</div>
@endsection