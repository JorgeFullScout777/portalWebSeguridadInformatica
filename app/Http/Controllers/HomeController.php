<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Consultar todos los usuarios de la base de datos
        $users = User::all();

        // Retornar la vista 'home' con los datos de usuarios
        return view('home', ['users' => $users]);
    }
}
