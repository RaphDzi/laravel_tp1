<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
<a href="{{ url('/') }}">Accueil</a>
<a href="{{ url('/contact') }}">Contact</a>
<a href="{{ url("/about") }}">A propos</a>

@yield('body')
<p>Nous contacter :<br>instagram jeuxVentes<br>facebook JeuxVentes</p>
</body>
</html>
