<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-light">

<div class="recuperar-card">

    <h2>
        Recuperar Contraseña
    </h2>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/recuperar-password">
            @csrf

            <div class="mb-3">
                <label>Correo Electrónico</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label>Nueva Contraseña</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label>Confirmar Contraseña</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    required>
            </div>

            <button
                type="submit"
                class="btn btn-primary w-100">
                Actualizar Contraseña
            </button>

        </form>

</div>

</body>
</html>