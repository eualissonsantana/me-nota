@extends('home')

@section('tarefas')
<section class="col-xl-10 col-10 row d-flex justify-content-between quadros">
    <section class="card shadow-sm " id="to-do">
        <section class="top-card">
           <article class="row d-flex justify-content-between header">
                <article class="row col-7 title">
                    <img src="\assets\img\circle.png">
                    <h5>A fazer</h5>
                </article>
                <article class="col-5 d-flex justify-content-end options">
                    <a href="#"><img src="\assets\img\add.png"id="add-img"></a>
                    <a href="#"><img src="\assets\img\three-dots.png" id="dots-img"></a>
                </article>
           </article>
        </section>
        <section class="task-content">
            <ul>
                @foreach($tarefa as $tar)
                @php
                    $tag = $tar->find($tar->id)->relCategoria;
                @endphp
                <a href="#">
                    <li class="task-card-row">
                        <section class="container row task-informations">
                            <article class="col-1" id="priority">
                                <h6>NA</h6>
                            </article>
                            <section class="col-11 container main-informations">
                                <div id="col-12 task-title">
                                    <h6>{{$tar->titulo}}</h6>
                                </div>
                                <article class="container row bottom-options">        
                                    <div id="data">
                                        <h6>{{$tar->data}}</h6> 
                                    </div>
                                    <div id="categoria">
                                        <h6>{{$tag->descricao}}</h6> 
                                    </div>
                                    <div>
                                        <h6 id="task-id">#{{$tar->id}}</h6> 
                                    </div>
                                </article>
                            </section>
                        </section>
                    </li>
                </a>
                @endforeach
            </ul>
        </section>
    </section>


    <section class="card shadow-sm" id="doing">
        <section class="top-card  ">
            <article class="row d-flex justify-content-between header">
                <article class="row col-7 title">
                    <img src="\assets\img\doing-circle.png">
                    <h5>Em progresso</h5>
                </article>
                <article class="col-5 d-flex justify-content-end options">
                    <a href="#"><img src="\assets\img\add.png" id="add-img"></a>
                    <a href="#"><img src="\assets\img\three-dots.png" id="dots-img"></a>
                </article>
           </article>
           
        </section>
        <section class="task-content">
            <ul>
                @foreach($tarefa as $tar)
                @php
                    $tag = $tar->find($tar->id)->relCategoria;
                @endphp
                <a href="#">
                    <li class="task-card-row">
                        <section class="container row task-informations">
                            <article class="col-1" id="priority">
                                <h6>NA</h6>
                            </article>
                            <section class="col-11 container main-informations">
                                <div id="col-12 task-title">
                                    <h6>{{$tar->titulo}}</h6>
                                </div>
                                <article class="container row bottom-options">        
                                    <div id="data">
                                        <h6>{{$tar->data}}</h6> 
                                    </div>
                                    <div id="categoria">
                                        <h6>{{$tag->descricao}}</h6> 
                                    </div>
                                    <div>
                                        <h6 id="task-id">#{{$tar->id}}</h6> 
                                    </div>
                                </article>
                            </section>
                        </section>
                    </li>
                </a>
                @endforeach
            </ul>
        </section>
    </section>

    <section class="card shadow-sm" id="done">
        <section class="top-card ">
            <article class="row d-flex justify-content-between header">
                <article class="row col-7 title">
                    <img src="\assets\img\filled-circle.png">
                    <h5>Concluída</h5>
                </article>
                <article class="col-5 d-flex justify-content-end options">
                    <a href="#"><img src="\assets\img\add.png" id="add-img"></a>
                    <a href="#"><img src="\assets\img\three-dots.png" id="dots-img"></a>
                </article>
            </article>
        </section>
        <section class="task-content">
            <ul>
                @foreach($tarefa as $tar)
                @php
                    $tag = $tar->find($tar->id)->relCategoria;
                @endphp
                <a href="#">
                    <li class="task-card-row">
                        <section class="container row task-informations">
                            <article class="col-1" id="priority">
                                <h6>NA</h6>
                            </article>
                            <section class="col-11 container main-informations">
                                <div id="col-12 task-title">
                                    <h6>{{$tar->titulo}}</h6>
                                </div>
                                <article class="container row bottom-options">        
                                    <div id="data">
                                        <h6>{{$tar->data}}</h6> 
                                    </div>
                                    <div id="categoria">
                                        <h6>{{$tag->descricao}}</h6> 
                                    </div>
                                    <div>
                                        <h6 id="task-id">#{{$tar->id}}</h6> 
                                    </div>
                                </article>
                            </section>
                        </section>
                    </li>
                </a>    
                @endforeach
            </ul>
        </section>
    </section>
</section>
@endsection