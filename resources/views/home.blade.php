@extends('layout.app')

@section("title", "Homepage")

{{-- in views/layout/app.blade.php è presente @ yield ( "css") --}}
@section("css")
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection 
    

@section('content')

    <h1>HOMEPAGE</h1>
    
@endsection