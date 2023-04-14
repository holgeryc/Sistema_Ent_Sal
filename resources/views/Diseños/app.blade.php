<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">
</head>
<body>
    @include('Navegacion.navigation')
    <!-- Imprimimos el contenido de la variable de cada página -->

    @yield('content')
</body>
</html>