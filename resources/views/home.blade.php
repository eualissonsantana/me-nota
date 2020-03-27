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
        
       <div class=" d-flex justify-content-center ">
            @yield('tarefas')
       </div>
        
    </section>
</div>
@endsection