@extends('templates.template')

@section('content')
<table class="table col-8 align-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Data de inicio</th>
      <th scope="col">Data de fim</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($tarefa as $tasks)
      @php
        $user = $tasks->find($tasks->id)->relUser;
      @endphp
        <tr>
        <th scope="row">{{$tasks->id}}</th>
        <td>{{$tasks->titulo}}</td>
        <td>{{$tasks->descricao}}</td>
        <td>{{$tasks->inicio_previsto}}</td>
        <td>{{$tasks->fim_previsto}}</td>
        <td>{{$user->name}}</td>
        </tr>
    @endforeach
    
  </tbody>
</table>
@endsection