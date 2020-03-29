@extends('home')

@section('tarefas')
<section class="container col-10 lista-tarefas">
    <table class="table table-borderless table-hover table-sm">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="5%"></th>
                <th scope="col" width="75%">tarefa</th>
                <th scope="col" width="10%">data</th>
                <th scope="col" width="10%">tag</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            <tr id="row-task">
                <td><img src="\assets\img\doing-circle.png"></td>
                <td >{{$tar->titulo}}</td>
                <td>{{$tar->data}}</td>
                <td>{{$tag->descricao}}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</section>
@endsection