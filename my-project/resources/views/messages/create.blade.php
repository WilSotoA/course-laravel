@extends('layout')

@section('content')
    <h2>Contacts</h2>
    <h2>Text Me</h2>
    @if (session()->has('info'))
        <h3>{{ session('info')}}</h3>
    @endif
    <form action="{{ route('messages.store') }}" method="post">
        {!! csrf_field() !!}
        <label for="nameContact">
            Name
            <input type="text" name="nameContact" value="{{ old('nameContact') }}">
            {!! $errors->first('nameContact','<span class="error">:message</span>') !!}
        </label>
        <label for="emailContact">
            Email
            <input type="email" name="emailContact" value="{{ old('emailContact') }}"> 
            {!! $errors->first('emailContact','<span class="error">:message</span>') !!}
        </label> 
        <label for="message">
            Message
            <textarea name="message">{{ old('message') }}</textarea>
            {!! $errors->first('message','<span class="error">:message</span>') !!}
        </label>
        <input type="submit" value="send">
    </form>
@endsection
