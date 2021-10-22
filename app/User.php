<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Model
{
    //campos trabalhados
    protected $tableUsers = ['name', 'email', 'message', 'phone', 'doc'];
    //protected $tableUsers = 'users';
}
