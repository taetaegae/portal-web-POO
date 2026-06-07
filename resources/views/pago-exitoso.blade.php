<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Exitoso</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="/">
            Portal Web
        </a>
    </div>
</nav>

<div class="pago-exitoso-card">

    <div class="alert">
        <h2>
            ✓ Compra realizada correctamente
        </h2>
    </div>

    <p>
        <strong>Método de pago:</strong><br>
        {{ ucfirst($metodo) }}
    </p>

    <a
        href="/productos"
        class="btn btn-dark">

        Seguir comprando

    </a>

</div>

</body>
</html>
