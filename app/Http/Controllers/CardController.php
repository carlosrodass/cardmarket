<?php

namespace App\Http\Controllers;

Use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    
	//Método mostrando todas las cartas
    public function index()
    {
        return  Card::all();
    }

    // public function create() 
    // {

    // }

    //Método mostrando carta por su nombre y devolviendo dueño, nombre y coleccion 
    public function find($cardname) 
    {
        $var = DB::table('cards')
        ->where('name', '=', $cardname)
        ->get(['id_user','name', 'collection']);

        return $var;
    }
	//Método mostrando carta por id del usuario
    public function show($id_user) 
    {
        $var = DB::table('cards')
        ->where('id_user', '=', $id_user)
        ->get();
        return $var;
    }

    //Método editando carta por su nombre
     public function edit()
    {
        
    }

    //Método almacenando la carta por el admin
     public function store($id_user, $name, $description, $collection) 
    {
        $var = DB::table('cards')
        ->insert([
            ['id_user' => $id_user,
            'name' => $name,
            'description'  => $description,
            'collection'  => $collection]
             ]);

        
        
        return $var;
    }

    // //Método actualizando la carta por su nombre
    // public function update() 
    // {

    // }

	//Método eliminando la carta por su nombre
    public function destroy($cardname) 
    {
    	$var = DB::table('cards')
    	->where('name', '=', $cardname)
    	->delete();

    	return $var;
    }

   

}
