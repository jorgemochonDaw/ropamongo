@extends('dashboard.master')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        Crear Calzado
    </div>
    <div class="card-body">
    @include('dashboard.partials.errors-form')
        <form action="{{ route('calzado.store') }}" method="post">
            @include('dashboard.ropa._form')
            <input type="submit" value="Enviar" class="mt-3 btn btn-success">
        </form>
        <a class="text-white btn btn-info my-2" href="{{route('calzado.index')}}"><i class="fas fa-arrow-left"></i> Volver al index</a>
    </div>
</div>
@endsection
