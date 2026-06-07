<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function mostrarLogin()
    {
        return view('login');
    }

    public function procesarLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {

            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Correo o contraseña incorrectos'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function mostrarChat()
    {
        return view('chat');
    }
    public function mostrarCarrito()
    {
    $carrito = session()->get('carrito', []);

    return view('carrito', compact('carrito'));
    }

    public function agregarCarrito(Request $request)
    {
        $carrito = session()->get('carrito', []);

        $carrito[] = [
            'nombre' => $request->nombre,
            'precio' => $request->precio
        ];

        session()->put('carrito', $carrito);

        return redirect('/carrito');
    }
    public function pagar(Request $request)
{
    $metodo = $request->metodo_pago;

    if($metodo == 'tarjeta')
    {
        $request->validate([
            'numero_tarjeta' => 'required|min:16',
            'titular' => 'required',
            'vencimiento' => 'required',
            'cvv' => 'required|min:3'
        ]);
    }

    session()->forget('carrito');

    return view('pago-exitoso', [
        'metodo' => $metodo
    ]);
}
}