<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = 'cards';

    protected $fillable = [
        'name', 'description', 'collection'
    ];

    //Relacion Many to One 
    //Metodo que saca el usuario que tiene la carta
    //Método que dice que muchas cartas pueden pertenecer a un usuario
    public function usuario(){
        return $this->belongsTo(User::class);
    }

    
     //Método que dice que una carta puede pertenecer a muchas colecciones
    public function collections(){
        return $this->belongsToMany(collection::class, 'card__collections', 'id_card' , 'id_collection'); 
        //este segundo parametro le indica a que tabla se refiere(migracion)
        //El tercer y cuarto parametro son las llaves foráneas que fueron definidas en la tabla card__collections
    }

}
