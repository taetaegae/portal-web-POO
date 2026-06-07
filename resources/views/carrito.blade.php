<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-light">

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
<div class="carrito-card">

    <h1>Mi Carrito</h1>

    <div class="carrito-table">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp

                @foreach($carrito as $item)

                    @php
                        $total += $item['precio'];
                    @endphp

                    <tr>
                        <td>{{ $item['nombre'] }}</td>
                        <td>${{ $item['precio'] }}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="carrito-total">
        Total: ${{ $total }}
    </div>

    <form method="POST" action="/pagar" class="carrito-form">

        @csrf

        <div class="mb-3">

            <label for="metodo_pago">
                Método de Pago
            </label>

            <select
                id="metodo_pago"
                name="metodo_pago"
                class="form-control"
                onchange="mostrarCampos()">

                <option value="efectivo">
                    Efectivo
                </option>

                <option value="tarjeta">
                    Tarjeta
                </option>

            </select>

        </div>

        <div id="datosTarjeta" style="display:none;">

            <div class="mb-3">

                <label for="numero_tarjeta">
                    Número de Tarjeta
                </label>

                <input
                    type="text"
                    id="numero_tarjeta"
                    name="numero_tarjeta"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label for="titular">
                    Titular
                </label>

                <input
                    type="text"
                    id="titular"
                    name="titular"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label for="vencimiento">
                    Fecha de Vencimiento
                </label>

                <input
                    type="text"
                    id="vencimiento"
                    name="vencimiento"
                    class="form-control"
                    placeholder="MM/AA">

            </div>

            <div class="mb-3">

                <label for="cvv">
                    CVV
                </label>

                <input
                    type="password"
                    id="cvv"
                    name="cvv"
                    class="form-control">

            </div>

        </div>

        <button
            type="submit"
            class="btn btn-dark w-100">

            Finalizar Compra

        </button>

    </form>

</div>

<script>

function mostrarCampos()
{
    let metodo =
        document.getElementById('metodo_pago').value;

    let tarjeta =
        document.getElementById('datosTarjeta');

    if(metodo === 'tarjeta')
    {
        tarjeta.style.display = 'block';
    }
    else
    {
        tarjeta.style.display = 'none';
    }
}

</script>
</body>
</html>