@extends('layouts.app')


@section('content')
    <div class="container">
        <h2>Crear Cliente</h2>
       
        <div class="row">
            <div class="col-7">
                <form method="POST" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-row">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}" required>
                    </div>
                    <div class="form-row">
                        <label>Correo</label>
                        <input class="form-control" type="text" name="correo" value="{{ old('correo') }}" required>
                    </div>
                    <div class="form-row">
                        <label>Direccion</label>
                        <input class="form-control" type="text" name="direccion" value="{{ old('direccion') }}" required>
                    </div>
                    <div class="form-row">
                        <label>Telefono</label>
                        <input class="form-control" type="text" name="telefono" value="{{ old('telefono') }}" required>
                    </div>
                   
                    <div class="form-row mt-3">
                        <button type="submit" class="btn btn-info btn-lg">Crear Cliente</button>
                        <a href="{{ route('customers.index') }}" class="btn btn-danger btn-lg ml-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection