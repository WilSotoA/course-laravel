@extends('layout')
@section('content')
    <h1>Edit User</h1>
    @if (session()->has('info'));
        <div class="alert alert-sucess">{{ session('info') }}</div>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">
            Name
            <input class="form-control" type="text" name="name" value="{{ $user->name }}">
            {!! $errors->first('name', '<span class="error">:message</span>') !!}
        </label>
        <label for="email">
            Email
            <input class="form-control" type="email" name="email" value="{{ $user->email }}">
            {!! $errors->first('email', '<span class="error">:message</span>') !!}
        </label>
        <input class="btn btn-primary" type="submit" value="send">
    </form>
@endsection