<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Lista usuários
    public function index() {
        // Carrega a view
        return view('users.index');
    }
}
