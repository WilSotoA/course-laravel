<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi sitio</title>
</head>
<body>
    <nav>
        <a href="<?php echo route('home') ?>">Home</a>
        <a href="<?php echo route('greetings', 'Wilmer') ?>">Greeting</a>
        <a href="<?php echo route('contacts') ?>">Contact</a>
    </nav>
</header>
    @yield('content')
    <footer>Copyright W {{ date('Y-m-d') }}</footer>
</body>
</html>