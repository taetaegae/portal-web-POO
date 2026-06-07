<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card p-4">

        <h2 class="text-center mb-4">
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

</div>

</body>
</html>