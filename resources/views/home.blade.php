@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <section class="container-fluid box-geral">
        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    <!--
        <section class="opcoes row d-flex justify-content-center">
            <h1 id="nome-user">Olá, {{ Auth::user()->name}}!</h1> 
        </section>
    -->

        <section class="box">
           <article class="title">
           </article>
        </section>

        
    </section>
</div>
@endsection



