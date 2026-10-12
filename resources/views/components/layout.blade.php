@props([
    'title' => 'Laracast'
])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<style>
    nav>a{
        color:blue;
    }

    .max-w-400{
        max-width: 400px;
        margin: auto;
    }

    .card {
        background:#a3a3a3;
        padding:1rem;
        text-align:center;
    }

</style>
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
    </nav>

    <main>
        {{ $slot }}
    </main>

</body>
</html>