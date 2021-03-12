<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <ul >
            <li><a href="/">Accueil</a></li>
            <li><a href="#">Liste des Personnages</a></li>
            <li><a href="#">Liste des dessinateurs</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>