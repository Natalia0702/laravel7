<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        return 'Cheguei';
        /*
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'telefone' => $request->telefone
        ]);
        echo "Usuário cadastrado com sucesso!";
        */
    }
}
