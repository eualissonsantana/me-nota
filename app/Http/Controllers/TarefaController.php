<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\TarefaRequest;
use App\Providers\RouteServiceProvider;
use App\Models\ModelTarefa;
use App\Models\ModelCategoria;
use App\User;

class TarefaController extends Controller
{

    private $objUser;
    private $objCategoria;
    private $objTarefa;

    public function __construct(){
        $this->objUser = new User();
        $this->objCategoria = new ModelCategoria();
        $this->objTarefa = new ModelTarefa();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefa = $this->objTarefa->all();
        return view('home', compact('tarefa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('cria_tarefa', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TarefaRequest $request)
    {
        $cad = $this->objTarefa->create([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            'finalizado'=>$request->finalizado,
            'inicio_previsto'=>$request->inicio,
            'fim_previsto'=>$request->fim,
            'id_user'=>$request->id_user,
            'id_categoria'=>$request->id_categoria
        ]);
        if($cad){
            return redirect('tarefas');
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
        $tarefa = $this->objTarefa->find($id);
        return view('exibe_tarefa', compact('tarefa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = $this->objTarefa->find('$id');
        $users = $this->objUser->all();
        return view('cria_tarefa', compact('tarefa', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TarefaRequest $request, $id)
    {
        $this->objTarefa->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            'finalizado'=>$request->finalizado,
            'inicio_previsto'=>$request->inicio,
            'fim_previsto'=>$request->fim,
            'id_user'=>$request->id_user,
            'id_categoria'=>$request->id_categoria
        ]);
        return redirect('tarefas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objTarefa->destroy('$id');
        return redirect('tarefas');
    }

    /*********  MEUS MÉTODOS **************/

    public function indexLista(){
        $tarefa = $this->objTarefa->all();
        return view('lista_tarefas', compact('tarefa'));
    }

    public function indexQuadro(){
        $tarefa = $this->objTarefa->all();
        return view('quadros', compact('tarefa'));
    }

    public function indexVisao(){
        $tarefa = $this->objTarefa->all();
        return view('visao', compact('tarefa'));
    }
}
