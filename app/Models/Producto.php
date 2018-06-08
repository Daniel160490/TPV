<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Producto extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'productos';
    protected $primaryKey = 'idProductos';
    // public $timestamps = false;
    protected $guarded = ['idProductos'];

    // Atributos que se pueden asignar de manera masiva.
    //protected $fillable = ['idProductos'];

    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    protected $hidden = ['idProductos'];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    //CATEGORIAS
    public function categorias()
    {
        return $this->belongsTo('App\Models\Categorias', 'idCategorias');
    }

    //COMANDAS
    public function comandas()
    {
        return $this->belongsTo('App\Models\Comandas');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
