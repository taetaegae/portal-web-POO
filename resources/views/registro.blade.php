<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/app.css'])

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

    <div class="registro-card">

        <h2 class="text-center mb-4">
            Crear Cuenta
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

        <form method="POST" action="/registro">
            @csrf

            <div class="mb-3">
                <label class="form-label">
                    Nombre Completo
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    required
                >
            </div>

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

            <div class="mb-3">
                <label class="form-label">
                    Contraseña
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Confirmar Contraseña
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    required
                >
            </div>

            @if ($errors->has('captcha'))
                <p>{{ $errors->first('captcha') }}</p>
            @endif

            <br>

            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            <P>{{ env('RECAPTCHA_SITE_KEY')}}</p>
            <button
                type="submit"
                class="btn btn-dark w-100">
                Registrarse
            </button>

        </form>

        <div class="text-center mt-4">
            <p>
                ¿Ya tienes una cuenta?
                <a href="/login">
                    Inicia sesión
                </a>
            </p>
        </div>

    </div>

</div>

</body>
</html>