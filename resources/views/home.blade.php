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
            

            @include('lista_tarefas')
        </div>
    <!--
        <section class="opcoes row d-flex justify-content-center">
            <h1 id="nome-user">Olá, {{ Auth::user()->name}}!</h1> 
        </section>
    -->
       
    </section>
</div>
@endsection

<script>
    new Vue({
        el: '#app',
        data: {
            contador: 0,
            x: 0,
            y: 0,
        },
        methods: {
            somar(passo, ev) {
                console.log(passo, ev)
                this.contador += passo
            },

            atualizaXY(event) {
                this.x = event.clientX
                this.y = event.clientY
            },

            exibirAlerta() {
                alert('Estou te alertando!')
            },

        }
    })
</script>



