<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTarefa extends Model
{
    protected $table = 'tarefa';


    public function relUser(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function relCategoria(){
        return $this->hasOne('App\Models\ModelCategoria', 'id', 'id_categoria');
    }



}