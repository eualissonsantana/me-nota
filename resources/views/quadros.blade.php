@extends('home')

@section('tarefas')
<section class="col-10 row d-flex justify-content-between quadros">
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
                <li class="task-card-row clearfix">
                   
                </li>
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
                <li class="task-card-row clearfix">
                   
                </li>
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
                <li class="task-card-row clearfix">
                   
                </li>
            </ul>
        </section>
    </section>



  
</section>
@endsection