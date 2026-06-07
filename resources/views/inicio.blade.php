<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand text-white fw-bold" href="/">
            Portal Web
        </a>

        <div>
            <a class="btn btn-nav me-2" href="/">
                Inicio
            </a>

            <a class="btn btn-nav me-2" href="/productos">
                Productos
            </a>

            <a class="btn btn-nav me-2" href="/contacto">
                Contacto
            </a>

            <a class="btn btn-nav me-2" href="/registro">
                Registro
            </a>

            <a class="btn btn-light" href="/login">
                Login
            </a>

            <form method="POST" action="/logout" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger ms-2">
                    Logout
                </button>
            </form>
        </div>

    </div>
</nav>

<section class="hero">

    <h1>Bienvenido al Portal Web</h1>

    <p>
        Bienvenido a nuestro portal web. Descubre nuestros productos. 
    </p>

    <a href="/productos" class="btn btn-dark mt-4">
        Ver Productos
    </a>

</section>

</body>
</html>