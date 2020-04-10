@extends('home')

@section('tarefas')
<section class="col-xl-10 col-10 row d-flex justify-content-init quadros">
    <section class="card-space" id="to-do">
        <article class="title-space">
            <h4>Para fazer</h4>
        </article>
        <article class="add-card shadow-sm d-flex justify-content-center align-middle ">
            <a src="#"><img id="add-img" src="\assets\img\add.png"></a>
        </article>
       
        <ul>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            @if($tar->situacao == 'to_do')
            <li class="card shadow-sm ">
                <span class="prioridade"></span>
                <article class="title-card">
                    <h5>{{$tar->titulo}}</h5>
                </article>
                <section class="container row bottom-informations align-middle">
                    <span class="foto"></span>
                    <h6 class="data">{{$tar->data}}</h6>
                </section>
            </li>
            @endif
            @endforeach
        </ul>
    </section>

    <section class="card-space" id="to-do">
        <article class="title-space">
            <h4>Em processo</h4>
        </article>
        <article class="add-card shadow-sm d-flex justify-content-center align-middle ">
            <a src="#"><img id="add-img" src="\assets\img\add.png"></a>
        </article>
       
        <ul>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            @if($tar->situacao == 'doing')
            <li class="card shadow-sm ">
                <span class="prioridade"></span>
                <article class="title-card">
                    <h5>{{$tar->titulo}}</h5>
                </article>
                <section class="container row bottom-informations align-middle">
                    <span class="foto"></span>
                    <h6 class="data">{{$tar->data}}</h6>
                </section>
            </li>
            @endif
            @endforeach
        </ul>
    </section>

    <section class="card-space" id="to-do">
        <article class="title-space">
            <h4>Concluídos</h4>
        </article>
        <article class="add-card shadow-sm d-flex justify-content-center align-middle ">
            <a src="#"><img id="add-img" src="\assets\img\add.png"></a>
        </article>
       
        <ul>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            @if($tar->situacao == 'done')
            <li class="card shadow-sm ">
                <span class="prioridade"></span>
                <article class="title-card">
                    <h5>{{$tar->titulo}}</h5>
                </article>
                <section class="container row bottom-informations align-middle">
                    <span class="foto"></span>
                    <h6 class="data">{{$tar->data}}</h6>
                </section>
            </li>
            @endif
            @endforeach
        </ul>
    </section>
</section>
@endsection