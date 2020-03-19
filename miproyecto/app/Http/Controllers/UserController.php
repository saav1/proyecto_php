<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showList(){
        return view('users.list');
    }

    public function showProfile($id){
        return view('users.profile', ['id' => $id]);
    }

    public function showForm(){
        //Mostrar el formulario
        return view('users.formulario');
    }

    public function postForm(Request $request){ //Inyección de dependencias
        //Guardar datos del formulario

        $nombre = $request->input('nombre');

        return view('users.profile', ['name' => $nombre]);
    }
}
