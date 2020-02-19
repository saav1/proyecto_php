<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /*ctuar con el código desde la
línea de comandos:
$ php artisan tinker
Diseño de Sistemas Software
     *ctuar con el código desde la
línea de comandos:
$ php artisan tinker
Diseño de Sistemas Softwareden for arrays.
     *ctuar con el código desde la
línea de comandos:
$ php artisan tinker
Diseño de Sistemas Software
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
