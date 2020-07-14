<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OpcionesEncuestaDocente extends Model
{
    protected $primarykey='id_opcion';
    protected $table = 'opciones';
    public $timestamps = false;

    protected $fillable = [
        'id_opcion','descrip_opcion','id_pregunta'
    ];

}
