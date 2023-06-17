@extends('layout')

@section('content')
<form method="POST" action="">
    @csrf
    <h1>Login</h1>
    @if (Session::has('error'))
        <div class="error">{{ Session::get('error') }}</div>
    @endif
    <label for="">Email</label>
    <input class="form-control" type="email" name="email" placeholder="Insert Email" required>
    <label for="">Password</label>
    <input class="form-control" type="password" name="password" placeholder="Insert Password" required>
    <button class="btn btn-primary" type="submit">LogIn</button>
</form>
@endsection
    