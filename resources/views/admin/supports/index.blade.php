<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }}">Criar Dúvida</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        {{-- listando suportes --}}
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    {{-- passando parametro id para a rota --}}
                    <a href="{{ route('supports.show', $support->id) }}">ir</a>
                    <a href="{{ route('supports.edit', $support->id) }}">editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
