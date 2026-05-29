<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return back()->with('success', 'Datos validos');
    }
}