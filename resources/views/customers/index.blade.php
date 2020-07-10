@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Lista de clientes</h2>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            <a class="btn btn-info text-white mb-3" href="{{ route('customers.create') }}">Nuevo Cliente</a>

            <table class="table table-light">
                <table class="table table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->nombre }}</td>
                                <td>{{ $customer->correo }}</td>
                                <td>{{ $customer->direccion }}</td>
                                <td>{{ $customer->telefono }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('customers.show', ['customer' => $customer->id]) }}">Ver</a>

                                <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}" class="btn btn-warning">Editar</a>

                               <form method="POST" class="d-inline" action="{{ route('customers.destroy', ['customer' => $customer->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ml-4 mt-1">Eliminar</button>
                            </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        
                    </tbody>
                </table>
                {{ $customers->links() }}
        </div>
    </div>
</div>
  
    
@endsection
