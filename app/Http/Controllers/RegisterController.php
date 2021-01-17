<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // public function register(Request $request)
    // {
    //      //Aqui validamos la peticion
    //     // El metodo de validar se encuentra en RegisterController
    //     // Este metodo se asegura que el nombre, email, contraseña y confirmacion de contraseña
    //     // esten rellenos.
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     // Cuando un usuario es creado, se logea
    //     $this->guard()->login($user);
    // }

    use RegistersUsers;

    protected function registered(Request $request, $user)
    {
        $user->generateToken();

        return response()->json(['data' => $user->toArray()], 201);
    }
}
