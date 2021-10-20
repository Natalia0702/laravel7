<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::post('/welcome', function (Request $request) {

    /*
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
        'telefone' => $request->telefone
    ]);

    echo 'Usuário cadastrado com sucesso!';
    dd($request->all());
    //debug and die
    */
});


Route::post('createUser', 'UserController@createUser');
Route::resource('user', 'UserController');
