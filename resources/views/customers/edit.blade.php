@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Cliente</h1>
        <form method="POST" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <label>Nombre</label>
                <input class="form-control" type="text" name="nombre" value="{{ old('nombre') ?? $customer->nombre }}" required>
            </div>
            <div class="form-row">
                <label>Correo</label>
                <input class="form-control" type="text" name="correo" value="{{ old('correo') ?? $customer->correo }}" required>
            </div>
            <div class="form-row">
                <label>Direccion</label>
                <input class="form-control" type="text" name="direccion" value="{{ old('direccion') ?? $customer->direccion }}" required>
            </div>
            <div class="form-row">
                <label>Telefono</label>
                <input class="form-control" type="text" name="telefono" value="{{ old('telefono') ?? $customer->telefono }}" required>
            </div>
           
            <div class="form-row mt-3">
                <button type="submit" class="btn btn-info btn-lg">Editar Cliente</button>
                <a href="{{ route('customers.index') }}" class="btn btn-danger btn-lg ml-4">Cancelar</a>
            </div>
        </form>
    </div>

    
@endsection
