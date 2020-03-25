<?php

use App\Models\ModelTarefa;

class TarefaHelper
{

    private static $objTarefa;

    public function __construct(){
        static::$objTarefa = new ModelTarefa();    
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function lista_tarefas()
    {
        $tarefa = static::$objTarefa;
        return view('home', compact('tarefa'));
    }

}

?>