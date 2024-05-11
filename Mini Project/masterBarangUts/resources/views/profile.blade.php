@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h4 class="mb-2">Pemrograman yang aku kuasai</h4>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-12 pt-5 d-flex justify-content-around">
            <img class="img2 img-thumbnail rounded-circle" src="{{ Vite::asset('resources/images/java.png') }}"
                alt="java">
            <img class="img2 img-thumbnail rounded-circle" src="{{ Vite::asset('resources/images/javascript.png') }}"
                alt="js">
            <img class="img2 img-thumbnail rounded-circle" src="{{ Vite::asset('resources/images/react.png') }}"
                alt="react">
        </div>
    </div>
@endsection
