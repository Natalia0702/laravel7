<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::post('/welcome', function (Request $request) {
});


Route::post('createUser', 'UserController@createUser');
Route::resource('user', 'UserController');

Route::get('teste', function () {
    //get data of bd table user

    //Query Builder(cannot add functions as in the case of ORM)
    //$dados = DB::table('users')->get(); 
    //dd($dados);

    //Eloquente ORM
    $dados = user::get();

    return $dados;
});
