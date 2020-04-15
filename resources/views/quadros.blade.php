@extends('home')

@section('tarefas')
<section class="col-xl-11 col-10 row d-flex justify-content-center quadros">
    <section class="card-space" id="to-do">
        <article class="title-space">
            <h4>Para fazer</h4>
        </article>
        <hr class="linha-separa-quadro">
       
        <ul>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            @if($tar->situacao == 'to_do')
            <li class="card shadow-sm ">
            <span class="span-prioridade-quadro" id="">{{$tar->prioridade}}</span>
                <article class="title-card">
                    <h5>{{$tar->titulo}}</h5>
                </article>
                <section class="container row bottom-informations align-middle">
                    <span class="foto"></span>
                    <h6 class="data">{{ \Carbon\Carbon::parse($tar->data)->format('D, d \\d\\e F')}}</h6>
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
        <hr class="linha-separa-quadro">
       
        <ul>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            @if($tar->situacao == 'doing')
            <li class="card shadow-sm ">
                <span class="span-prioridade-quadro" id="">{{$tar->prioridade}}</span>
                <article class="title-card">
                    <h5>{{$tar->titulo}}</h5>
                </article>
                <section class="container row bottom-informations align-middle">
                    <span class="foto"></span>
                    <h6 class="data">{{ \Carbon\Carbon::parse($tar->data)->format('D, d \\d\\e F')}}</h6>
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
        <hr class="linha-separa-quadro">
       
        <ul>
            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            @if($tar->situacao == 'done')
            <li class="card shadow-sm ">
            <div class="span-prioridade-quadro" id="">{{$tar->prioridade}}</div>
                <article class="title-card">
                    <h5>{{$tar->titulo}}</h5>
                </article>
                <section class="container row bottom-informations align-middle">
                    <span class="foto"></span>
                    <h6 class="data">{{ \Carbon\Carbon::parse($tar->data)->format('D, d \\d\\e F')}}</h6>
                </section>
            </li>
            @endif
            @endforeach
        </ul>
    </section>
</section>
@endsection