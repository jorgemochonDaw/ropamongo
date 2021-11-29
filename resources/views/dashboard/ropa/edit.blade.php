@extends('dashboard.master')
@section('content')
<div class="card mt-4">
    <div class="card-header">
        Editar Calzado de la marca: {{ $calzado->marca }}
    </div>
    <div class="card-body">
    @include('dashboard.partials.errors-form')
        <form action="{{ route('calzado.update',$calzado->_id) }}" method="post">
            @method('PUT')
            @include('dashboard.ropa._form')
            <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
        </form>
        <a class="text-white btn btn-info my-2" href="{{route('calzado.index')}}"><i class="fas fa-arrow-left"></i> Volver al index</a>
    </div>
</div>
@endsection
