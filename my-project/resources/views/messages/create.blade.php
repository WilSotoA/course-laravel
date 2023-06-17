@extends('layout')

@section('content')
    <h2>Contacts</h2>
    <h2>Text Me</h2>
    @if (session()->has('info'))
        <h3>{{ session('info')}}</h3>
    @endif
    <form action="{{ route('messages.store') }}" method="post">
        @csrf
        <label for="nameContact">
            Name
            <input class="form-control" type="text" name="nameContact" value="{{ old('nameContact') }}">
            {!! $errors->first('nameContact','<span class="error">:message</span>') !!}
        </label>
        <label for="emailContact">
            Email
            <input class="form-control" type="email" name="emailContact" value="{{ old('emailContact') }}"> 
            {!! $errors->first('emailContact','<span class="error">:message</span>') !!}
        </label> 
        <label for="message">
            Message
            <textarea class="form-control" name="message">{{ old('message') }}</textarea>
            {!! $errors->first('message','<span class="error">:message</span>') !!}
        </label>
        <input class="btn btn-primary" type="submit" value="send">
    </form>
@endsection
