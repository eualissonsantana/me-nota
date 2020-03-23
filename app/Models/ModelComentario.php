<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelComentario extends Model
{
    protected $table = 'comentario';
    protected $fillable=['descricao', 'id_tarefa'];


    public function relTarefa(){
        return $this->hasOne('App\Models\ModelTarefa', 'id', 'id_tarefa');
    }
}
