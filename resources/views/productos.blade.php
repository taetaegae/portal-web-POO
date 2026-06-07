<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

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

            <a class="btn btn-nav me-2" href="/chat">
                Chat
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

<div class="container py-5">

    <h1 class="text-center mb-5">
        Nuestros Productos
    </h1>

    <div class="productos-grid">

    <div class="product-card">
        <h3>Serúm Anti Imperfecciones Garnier Express Aclara</h3>
        <p>
            Marca: Garnier
            Tipo de piel: Grasa
            Zonas de aplicación: Rostro
            Formato del producto: Sérum
            Formato de venta: Unidad.
        </p>
        <h5>$96.00</h5>
        <a href="/carrito" class="btn btn-dark w-100">
            Comprar
        </a>
    </div>

    <div class="product-card">
        <h3>Tablet Huawei Matepad SE 11 8gb+128gb Gris, M-Pencil Incluido</h3>
        <p>
            Capacidad: 128 GB
            Cámaras traseras: 8 Mpx
            Tamaño de la pantalla: 11"
        </p>
        <h5>$3,429.00</h5>
        <a href="/carrito" class="btn btn-dark w-100">
            Comprar
        </a>
    </div>

    <div class="product-card">
        <h3>Consola Nintendo Switch 2 + Mario Kart World Bundle</h3>
        <p>
            Capacidad: 256 GB
            Con Wi-Fi: Sí
            Tipo de consola: Híbrida
            Cantidad de controles incluidos: 2.
        </p>
        <h5>$10,249.00</h5>
        <a href="/carrito" class="btn btn-dark w-100">
            Comprar
        </a>
    </div>

</div>

</body>
</html>