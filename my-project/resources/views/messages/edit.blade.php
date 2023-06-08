@extends('layout')

@section('content')
    <h1>Edit Message</h1>
    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nameContact">
            Name
            <input type="text" name="nameContact" value="{{ $message->name }}">
            {!! $errors->first('nameContact', '<span class="error">:message</span>') !!}
        </label>
        <label for="emailContact">
            Email
            <input type="email" name="emailContact" value="{{ $message->email }}">
            {!! $errors->first('emailContact', '<span class="error">:message</span>') !!}
        </label>
        <label for="message">
            Message
            <textarea name="message">{{ $message->message }}</textarea>
            {!! $errors->first('message', '<span class="error">:message</span>') !!}
        </label>
        <input type="submit" value="send">
    </form>
@endsection