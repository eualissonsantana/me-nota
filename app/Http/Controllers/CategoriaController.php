<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        $categoria = $this->objCategoria->all();
        return view('index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('cria_categoria', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objCategoria->create([
            'descricao'=>$request->descricao,
            'id_user'=>$request->id_user
        ]);
        if($cad){
            return redirect('categorias');
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
        $categoria = $this->objCategoria->find($id);
        return view('exibe_categoria', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = $this->objCategoria->find('$id');
        $users = $this->objUser->all();
        return view('cria_categoria', compact('categoria', 'users'));
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
        $this->objCategoria->where(['id'=>$id])->update([
            'descricao'=>$request->descricao,
            'id_user'=>$request->id_user,
        ]);
        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objCategoria->destroy('$id');
        return redirect('categorias');
    }
}
