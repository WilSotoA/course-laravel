@extends('layout')
@section('content')
    <h1>Message</h1>
    <p>Send for {{ $message->name }} - {{ $message->email }}</p>
    <p>{{ $message->message }}</p>
@endsection