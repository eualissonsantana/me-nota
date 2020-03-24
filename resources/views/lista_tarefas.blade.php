<section class="container col-8 lista-tarefas">
    <table class="table table-borderless table-hover table-sm">
        <thead class="thead-light">
            <tr>
                <th scope="col">tarefa</th>
                <th scope="col">data</th>
                <th scope="col">tag</th>
            </tr>
        </thead>
        <tbody>

            @foreach($tarefa as $tar)
            @php
                $tag = $tar->find($tar->id)->relCategoria;
            @endphp
            <tr>
                <td>{{$tar->titulo}}</td>
                <td>{{$tar->data}}</td>
                <td>{{$tag->descricao}}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</section>