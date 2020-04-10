<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTarefa extends Model
{
    protected $table = 'tarefa';
    protected $fillable=['titulo', 'descricao', 'finalizado', 'fim_previsto', 'inicio_previsto', 'id_categoria', 'id_user'];


    public function relUser(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function relCategoria(){
        return $this->hasOne('App\Models\ModelCategoria', 'id', 'id_categoria');
    }

    public function relProjeto(){
        return $this->hasOne('App\Models\ModelProjeto', 'id', 'id_tarefa');
    }

    public function relComentario(){
        return $this->hasMany('App\Models\ModelComentario', 'id_tarefa');
    }
}