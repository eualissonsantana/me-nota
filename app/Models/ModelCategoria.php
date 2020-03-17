<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCategoria extends Model
{
    protected $table = 'categoria';

    public function relTarefa(){
        return $this->hasMany('App\Models\ModelTarefa', 'id_user');
    }
}
