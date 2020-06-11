<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    //
   // use SoftDeletes;
    //$table->softDeletes();

    
    protected $fillable = ['nombre_proyecto', 'tipo','descripcion',  'precio', 'imagen'];


}
