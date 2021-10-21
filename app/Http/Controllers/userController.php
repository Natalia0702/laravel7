<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatorRequest;
use App\Mail\RegistrationMail;
use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Mail;

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

    public function store(ValidatorRequest $request)
    {
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->telefone = $request->telefone;
        $data->save();


        Mail::to($data->email)->send(new RegistrationMail($data));

        return 'Usuário: ' . $data->name . ' Cadastrado com sucesso!!';
        /*
        //senha_enc = md5($dados->text_senha); to use encrypted password 
        //echo 'Usuário = ' . $name . '<br>' . 'Email: ' . $email;
        return $dados;
        */
    }

    public function show($id)
    {
        //$dados = user::where('id', $id)->get();
        return user::find($id);
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
