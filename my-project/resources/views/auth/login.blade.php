@extends('layout')

@section('content')
<form method="POST" action="">
    @csrf
    <h1>Login</h1>
    @if (Session::has('error'))
        <div class="error">{{ Session::get('error') }}</div>
    @endif
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Insert Email" required>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Insert Password" required>
    <button type="submit">LogIn</button>
</form>
@endsection
    