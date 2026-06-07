<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

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

            <form method="POST" action="/logout" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger ms-2">
                    Logout
                </button>
            </form>
        </div>

    </div>
</nav>

<div class="container">

    <div class="contacto-card">

        <h2 class="text-center mb-4">
            Contáctanos
        </h2>

        <form>

            <div class="mb-3">
                <label class="form-label">
                    Nombre
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu nombre"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Correo
                </label>

                <input
                    type="email"
                    class="form-control"
                    placeholder="correo@ejemplo.com"
                >
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Mensaje
                </label>

                <textarea
                    rows="5"
                    class="form-control"
                    placeholder="Escribe tu mensaje">
                </textarea>
            </div>

            <button
                type="submit"
                class="btn btn-dark w-100">
                Enviar Mensaje
            </button>

        </form>

    </div>

</div>

</body>
</html>