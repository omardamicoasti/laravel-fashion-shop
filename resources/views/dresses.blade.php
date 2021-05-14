@extends('layout.app')

@section("title", "Dresses")
    

@section('content')

    <h1>Dresses list</h1>
    
    
    @foreach ($dresses as $dress)
        <p>{{ $dress->type }}</p>  
    @endforeach
    
@endsection