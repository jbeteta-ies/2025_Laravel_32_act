<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('users.index', compact('usuarios'));
    }

    public function create()
    {
        // creamos el usuario María utilizando el modelo
        $usuario = new User();
        $usuario->name = 'María García';
        $usuario->email = 'mgarcia@example.com';
        $usuario->password = Hash::make('123456');
        $usuario->age = 30;
        $usuario->address = 'Calle Mayor 1';
        $usuario->zipCode = 28080;
        $usuario->save();

        // creamos el usuario Juan Pérez utilizando el método create()
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'jperez@example.com',
            'password' => Hash::make('password'),
            'age' => 25,
            'address' => 'Calle Falsa 123',
            'zipCode' => 28080
        ]);

        // creamos el usuario José Flores utilizando el método create()
        User::create([
            'name' => 'José Flores',
            'email' => 'jflores@example.com',
            'password' => Hash::make('flores'),
            'age' => 25,
            'address' => 'Calle Falsa 123',
            'zipCode' => 28080
        ]);

        // redirigimos a la vista de listado de usuarios
        return redirect()->route('user.index');
    }
}
