<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <h1>Greeting for <?php echo $name?></h1>
    <h1>Greeting for {{ $name }}</h1>
    <ul>
        @forelse ($consoles as $console)
            <li>{{ $console }}</li>
        @empty
            <p>no consoles</p>
        @endforelse
    </ul>
    @if (count($consoles) === 1)
        <p>You only have one console</p>
    @elseif(count($consoles) > 1)
    <p>You have several consoles</p>
    @endif
    <header>
        <nav>
            <a href="<?php echo route('home') ?>">Home</a>
            <a href="<?php echo route('greetings', 'Wilmer') ?>">Greeting</a>
            <a href="<?php echo route('contacts') ?>">Contact</a>
        </nav>
    </header>
</body>
</html>