<?php

namespace App\Http\Controllers;

Use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
	

	public function index() //Esto es un metodo GET
    {
        return  Collection::all();
    }


    public function show($collection) //Esto es un metodo GET
    {
        $var = DB::table('collections')
        -> where('name', '=', $collection)
        ->get('edit_date');
        return $var;
    }

  
}
