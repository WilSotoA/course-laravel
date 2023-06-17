<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @vite(['resources/css/app.css']) {{--compilar css--}}
    <title>Mi sitio</title>
</head>

<body>
    <header>
        <?php function activeMenu($url)
        {
            return request()->is($url) ? 'nav-link bg-info' : 'nav-link';
        }
        ?>
        <nav class="nav justify-content-center">
            @guest
                <a class="{{ activeMenu('login') }}" href="/login">Log In</a>
            @endguest
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Home</a>
            <a class="{{ activeMenu('greetings/*') }}" href="{{ route('greetings', 'Wilmer') }}">Greeting</a>
            <a class="{{ activeMenu('messages/create') }}" href="{{ route('messages.create') }}">Contact</a>
            @auth
                <a class="{{ activeMenu('messages') }}" href="{{ route('messages.index') }}">Messages</a>
                <a class="nav-link" href="/logout">Log Out {{ auth()->user()->name }}</a>
            @endauth
        </nav>
    </header>
    @yield('content')
    <footer class="d-flex justify-content-center align-items-center bg-dark text-white">Copyright W {{ date('Y-m-d') }}</footer>
</body>
</html>
