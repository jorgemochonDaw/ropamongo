@extends('dashboard.master')
@section('content')
<div class="card mt-4">
    <div class="card-header">
        Listado de calzados Mongo
    </div>
    <div class="card-body">

        <a class="text-white btn btn-success my-2" href="{{route('calzado.create')}}"><i class="fa fa-plus"></i> Crear</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Talla</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Color</th>
                    <th>Fecha creado</th>
                    <th>Fecha actualizado</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($calzados as $calzado)
                <tr>
                    <td>{{ $calzado->_id }}</td>
                    <td>{{ $calzado->talla }}</td>
                    <td>{{ $calzado->marca }}</td>
                    <td>{{ $calzado->precio }}</td>
                    <td>{{ $calzado->color }}</td>
                    <td>{{ $calzado->created_at->format('d-m-Y') }}</td>
                    <td>{{ $calzado->updated_at->format('d-m-Y') }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{ route('calzado.edit', $calzado->_id) }}"><i class="fa fa-edit text-white"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('calzado.destroy',$calzado->_id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Eliminar" class="mt-3 btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {{ $calzados->links() }}
    </div>
</div>

@endsection