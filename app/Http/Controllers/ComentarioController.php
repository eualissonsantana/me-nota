<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelComentario;

class ComentarioController extends Controller
{

    private $objComentario;

    public function __construct(){
        $this->objComentario = new Comentario();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentario = $this->objComentario->all();
        return $comentario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cria_comentario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objTarefa->create([
            'descricao'=>$request->descricao,
            'id_tarefa'=>$request->id_tarefa
        ]);
        if($cad){
            return redirect('comentarios');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentario = $this->objComentario->find($id);
        return view('exibe_comentario', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = $this->objComentario->find('$id');
        return view('cria_comentario', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objTarefa->where(['id'=>$id])->update([
            'descricao'=>$request->descricao,
            'id_tarefa'=>$request->id_tarefa
        ]);
        return redirect('comentarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objComentario->destroy('$id');
        return redirect('comentarios');
    }
}
