<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProjeto;

class ProjetoController extends Controller
{

    private $objProjeto;

    public function __construct(){
        $this->objProjeto = new Projeto();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeto = $this->objProjeto->all();
        return view('home', compact('projeto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $cad = $this->objProjeto->create([
            'titulo'=>$request->titulo,
            'id_user'=>$request->id_user
        ]);
        if($cad){
            return redirect('projetos');
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
        $projeto = $this->objProjeto->find($id);
        return view('exibe_projeto', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projeto = $this->objProjeto->find('$id');
        return view('cria_projeto', compact('projeto'));
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
        $this->objProjeto->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'id_user'=>$request->id_user
        ]);
        return redirect('projetos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objProjeto->destroy('$id');
        return redirect('projetos');
    }
}
