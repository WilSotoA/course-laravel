<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .active {
            text-decoration: none;
            color: green
        }

        .error {
            color: red;
            font-size: 1.2rem;
        }
    </style>
    <title>Mi sitio</title>
</head>

<body>
    <header>
        <?php function activeMenu($url)
        {
            return request()->is($url) ? 'active' : '';
        }
        ?>
        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Home</a>
            <a class="{{ activeMenu('greetings/*') }}" href="{{ route('greetings', 'Wilmer') }}">Greeting</a>
            <a class="{{ activeMenu('messages/create') }}" href="{{ route('messages.create') }}">Contact</a>
            @auth
                <a class="{{ activeMenu('messages') }}" href="{{ route('messages.index') }}">Messages</a>
                <a href="/logout">Log Out {{ auth()->user()->name }}</a>
            @endauth
            @guest
                <a class="{{ activeMenu('login') }}" href="/login">Log In</a>
            @endguest
        </nav>
    </header>
    @yield('content')
    <footer>Copyright W {{ date('Y-m-d') }}</footer>
</body>

</html>
