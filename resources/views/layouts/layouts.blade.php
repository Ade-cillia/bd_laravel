<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/characterList">Liste des personnages</a></li>
            <li><a href="/draftsmanList">Liste des dessinateurs</a></li>
            <li><a href="/characterAdd">Ajouter un personnage</a></li>
            <li><a href="/draftsmanAdd">Ajouter un dessinateur</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>