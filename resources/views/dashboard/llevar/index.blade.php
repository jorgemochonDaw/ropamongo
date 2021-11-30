<h1>Llevar datos</h1>
<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>ID llevar</th>
                <th>ID calzado</th>
                <th>Fecha creado</th>
                <th>Fecha actualizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($llevar as $l)
                <tr>
                    <td>{{ $l->_id }}</td>
                    <td>{{ $l->calzado_id }}</td>
                    <td>{{ $l->created_at->format('d-m-Y') }}</td>
                    <td>{{ $l->updated_at->format('d-m-Y') }}</td>
                </tr>
        </tbody>
        @endforeach
    </table>

</div>
