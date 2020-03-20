@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
            <section class="container-fluid box-geral">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <section class="opcoes row d-flex justify-content-center">
                    <h1 id="nome-user">Olá, {{ Auth::user()->name}}!</h1> 
                </section>
                <section class="row d-flex justify-content-init">
                    <article class="btn-tarefa">
                        <button type="button" class="btn btn-outline-dark" id="btn-categorias" data-toggle="modal" data-target="#ModalCategoria">+ Categorias</button>
                        <button type="button" class="btn btn-outline-dark" id="btn-tarefas" data-toggle="modal" data-target="#ModalTarefas">+ Tarefas</button>
                    </article>
                </section>
            </section>
    </div>
</div>
@stop



