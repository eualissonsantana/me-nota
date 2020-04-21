@extends('home')
@section('tarefas')
<section class="container-fluid lista-tarefas">
    <section class="row justify-content-between " id="titulo-lista">
        <section class="container row">
            <h4 id="tilt">Lista de Tarefas</h4>
            <hr id="separa-btn">
            
            <button class="btn btn-quadro" type="button" id="adicionarQuadroButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Adicionar
            </button>
        </section>
        
        <div class="dropdown">
            <button class="btn btn-quadro dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtrar
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Para fazer</a>
                <a class="dropdown-item" href="#">Em processo</a>
                <a class="dropdown-item" href="#">Concluídas</a>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="table-tarefas">
        <section class="row" id="tit-linha">
            <article id="tit-tarefa"><h4>Nome da tarefa</h4></article>
            <article id="tit-responsavel"><h4>Responsável</h4></article>
            <article id="tit-data"><h4>Data de conclusão</h4></article>
            <article id="tit-prioridade"><h4>Prioridade</h4></article>
            <article id="tit-categoria"><h4>Categoria</h4></article>
        </section>
        @foreach($tarefa as $tar)
        @php
            $tag = $tar->find($tar->id)->relCategoria;
            $user = $tar->find($tar->id)->relUser;
        @endphp
        @if($tar->id_tarefa == null)
        <section class="row" id="row-task">
            <article id="tarefa">
                <a class="ancora-situacao" href="#">
                    <span class="span-situacao">{{$tar->situacao}}</span>
                    <img class="img-situacao" onmouseover="changeOn(this)" onmouseout="changeOff(this)" src="\assets\img\doing.png">
                </a>{{$tar->titulo}}
            </article>
            <article id="user">{{$user->name}}</article>
            <article id="data">{{ \Carbon\Carbon::parse($tar->data)->format('D, d \\d\\e F')}}</article>
            <article id="prioridade">
                <div class="span-prioridade" id="">{{$tar->prioridade}}</div>
            </article>
            <article id="categoria"><div class="span-categoria" id="">{{$tag->descricao}}</div></article>
        </section>
            @foreach($tarefa as $sub)
                @php
                    $cat = $sub->find($sub->id)->relCategoria;
                    $userSub = $sub->find($sub->id)->relUser;
                @endphp
                @if($sub->id_tarefa == $tar->id)
                    <section  class="row" id="subtarefas">
                        <article id="tarefa">
                            <a class="ancora-situacao" href="#">
                                <span class="span-situacao">{{$sub->situacao}}</span>
                                <img class="img-situacao" onmouseover="changeOn(this)" onmouseout="changeOff(this)" src="\assets\img\doing.png">
                            </a>{{$sub->titulo}}
                        </article>
                        <article id="user">{{$userSub->name}}</article>
                        <article id="data">{{ \Carbon\Carbon::parse($sub->data)->format('D, d \\d\\e F')}}</article>
                        <article id="prioridade">
                            <div class="span-prioridade" id="">{{$sub->prioridade}}</div>
                        </article>
                        <article id="categoria"><div class="span-categoria" id="">{{$cat->descricao}}</div></article>
                    </section>
                @endif
            @endforeach
        @endif   
        @endforeach
    </section>
</section>
@endsection