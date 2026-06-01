<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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

<div class="container">

    <div class="login-card">

        <h2 class="text-center mb-4">
            Iniciar Sesión
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="mb-3">
                <label class="form-label">
                    Correo Electrónico
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Contraseña
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    minlength="8"
                    required
                >
            </div>

            <button
                type="submit"
                class="btn btn-dark w-100">
                Ingresar
            </button>
        </form>

        <div class="text-center mt-4">
            <p>
                ¿No tienes cuenta?
                <a href="/registro">
                    Regístrate aquí
                </a>
            </p>
        </div>

    </div>

</div>

</body>
</html>