<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    public function index()
    {
        //show form
        return view('home');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $telefone = $request->telefone;
        //senha_enc = md5($dados->text_senha); to use encrypted password 
        echo 'Usuário = ' . $name . '<br>' . 'Email: ' . $email;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
