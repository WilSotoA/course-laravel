@extends('layout')

@section('content')
    <h1>Greeting for {{ $name }}</h1>
    <ul>
        @forelse ($consoles as $console)
            <li>{{ $console }}</li>        
        @empty
            <p>There are not consoles</p>
        @endforelse
    </ul>
@endsection