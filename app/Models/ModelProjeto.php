<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProjeto extends Model
{
    
    protected $table = 'projeto';
    protected $fillable=['titulo', 'descricao', 'id_user'];


    public function relUser(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function relTarefa(){
        return $this->hasMany('App\Models\ModelCategoria', 'id_categoria');
    }
}
