<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Componente extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'componente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Laboratorio','Nombre','Marca','Modelo','Caracteristicas','Uso','Seguridad','Imagenes','Video'    ];
}