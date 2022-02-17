@extends('layout.base')

@section('content')
    
    <div class="container-card">
        @foreach ($movies as $movie)
            <ul class="card">
                <li class="title">
                    <h2> {{ $movie->title }} </h2>
                </li>
                <li>
                    <h4> {{ $movie->original_title }} </h4>
                </li>
                <li>
                    <p> {{ $movie->nationality }} </p>
                </li>
                <li> {{ $movie->date }} </li>
                <li> {{ $movie->vote }} </li>
            </ul>
        @endforeach
        
    </div>

@endsection
