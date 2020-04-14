@extends('home')
@php
    use Carbon\Carbon;
    setlocale (LC_TIME, 'pt_BR');
@endphp
@section('tarefas')
<section class="container-fluid lista-tarefas">
    <section class="row justify-content-start" id="titulo-lista">
        <h4 id="tilt">Lista de Tarefas</h4>
        <hr id="separa-filtro">
        <div class="dropdown">
            <button class="btn btn-filtro dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtrar
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </section>
    <table class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th scope="col" width="45%">Nome da tarefa</th>
                <th scope="col" width="10%">Responsável</th>
                <th scope="col" width="20%">Data de conclusão</th>
                <th scope="col" width="10%">Prioridade</th>
                <th scope="col" width="10%">Categoria</th>
            </tr>
        </thead>
        <tbody >
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
                $user = $tar->find($tar->id)->relUser;
            @endphp
            <tr id="row-task">
                <td><a class="ancora-situacao" href="#"><span class="span-situacao">{{$tar->situacao}}</span><img class="img-situacao" onmouseover="changeOn(this)" onmouseout="changeOff(this)" src="\assets\img\doing.png"></a>{{$tar->titulo}}</td>
                <td>{{$user->name}}</td>
                <td>{{ \Carbon\Carbon::parse($tar->data)->format('D, d \\d\\e F')}}</td>
                <td class="justify-content-center"><div class="span-prioridade" id="">{{$tar->prioridade}}</div></td>
                <td class="justify-content-center"><div class="span-categoria" id="">{{$tag->descricao}}</div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection