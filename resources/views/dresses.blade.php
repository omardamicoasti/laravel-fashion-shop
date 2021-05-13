@extends('layout.app')

@section("title", "Dresses")
    

@section('content')

    <h1>Dresses list</h1>
    <?php
        foreach ($dresses as $dress) {
            echo "prova"
        }




    ?>
    
@endsection