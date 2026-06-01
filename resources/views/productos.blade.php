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

    </div>
</nav>

<div class="container py-5">

    <h1 class="text-center mb-5">
        Nuestros Productos
    </h1>

    <div class="productos-grid">

        <div class="product-card">
            <h3>Producto 1</h3>
            <p>Descripción breve del producto.</p>
            <h5>$100.00</h5>
            <button class="btn btn-dark w-100">
                Comprar
            </button>
        </div>

        <div class="product-card">
            <h3>Producto 2</h3>
            <p>Descripción breve del producto.</p>
            <h5>$250.00</h5>
            <button class="btn btn-dark w-100">
                Comprar
            </button>
        </div>

        <div class="product-card">
            <h3>Producto 3</h3>
            <p>Descripción breve del producto.</p>
            <h5>$399.00</h5>
            <button class="btn btn-dark w-100">
                Comprar
            </button>
        </div>

    </div>

</div>

</body>
</html>