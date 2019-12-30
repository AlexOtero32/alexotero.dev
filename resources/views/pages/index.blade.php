@extends('layout')
@section('content')
<div class="hero" style="background-image: url('https://via.placeholder.com/1920x1080')">
    <div class="overlay">
    </div>
    <div class="hero-content">
        <img src="{{ asset('/img/alex.jpg') }}" alt="Alejandro Otero Gómez" class="rounded-full border-gray-400 border-8 h-64 w-64">
        <div class="name">
            <h1>Alejandro <span>Otero</span></h1>
        </div>
    </div>

</div>
@endsection