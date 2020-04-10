@extends('home')
@php
    use Carbon\Carbon;
    setlocale (LC_TIME, 'pt_BR');
@endphp
@section('tarefas')
<section onload="active(this.class)" class="container-fluid lista-tarefas">
    <table class="table table-bordered table-hover ">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="3%"></th>
                <th scope="col" width="55%">tarefa</th>
                <th scope="col" width="10%">responsável</th>
                <th scope="col" width="10%">data</th>
                <th scope="col" width="10%">prioridade</th>
                <th scope="col" width="10%">tag</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
                $user = $tar->find($tar->id)->relUser;
            @endphp
            <tr id="row-task">
                <td><img src="\assets\img\doing-circle.png"></td>
                <td>{{$tar->titulo}}</td>
                <td >{{$user->name}}</td>
                <td>{{ \Carbon\Carbon::parse($tar->data)->format('D, d \\d\\e F')}}</td>
                <td>{{$tar->prioridade}}</td>
                <td>{{$tag->descricao}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection