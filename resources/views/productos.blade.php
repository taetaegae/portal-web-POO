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

            <a class="btn btn-nav me-2" href="/chat">
                Chat
            </a>

            <a class="btn btn-nav me-2" href="/carrito">
                Carrito
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

        <!-- Producto 1 -->
        <div class="product-card">
            <h3>Serúm Anti Imperfecciones Garnier Express Aclara</h3>

            <p>
                Marca: Garnier <br>
                Tipo de piel: Grasa <br>
                Zonas de aplicación: Rostro <br>
                Formato del producto: Sérum <br>
                Formato de venta: Unidad
            </p>

            <h5>$96.00</h5>

            <form method="POST" action="/agregar-carrito">
                @csrf

                <input type="hidden" name="nombre"
                    value="Serúm Anti Imperfecciones Garnier Express Aclara">

                <input type="hidden" name="precio"
                    value="96">

                <button type="submit"
                    class="btn btn-dark w-100">
                    Agregar al carrito
                </button>
            </form>
        </div>

        <!-- Producto 2 -->
        <div class="product-card">
            <h3>Tablet Huawei Matepad SE 11 8GB + 128GB</h3>

            <p>
                Capacidad: 128 GB <br>
                Cámaras traseras: 8 MP <br>
                Tamaño de pantalla: 11"
            </p>

            <h5>$3,429.00</h5>

            <form method="POST" action="/agregar-carrito">
                @csrf

                <input type="hidden" name="nombre"
                    value="Tablet Huawei Matepad SE 11">

                <input type="hidden" name="precio"
                    value="3429">

                <button type="submit"
                    class="btn btn-dark w-100">
                    Agregar al carrito
                </button>
            </form>
        </div>

        <!-- Producto 3 -->
        <div class="product-card">
            <h3>Consola Nintendo Switch 2 + Mario Kart World Bundle</h3>

            <p>
                Capacidad: 256 GB <br>
                Con Wi-Fi: Sí <br>
                Tipo de consola: Híbrida <br>
                Incluye 2 controles
            </p>

            <h5>$10,249.00</h5>

            <form method="POST" action="/agregar-carrito">
                @csrf

                <input type="hidden" name="nombre"
                    value="Nintendo Switch 2 + Mario Kart World Bundle">

                <input type="hidden" name="precio"
                    value="10249">

                <button type="submit"
                    class="btn btn-dark w-100">
                    Agregar al carrito
                </button>
            </form>
        </div>

    </div>

</div>

</body>
</html>