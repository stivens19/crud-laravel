@extends('layouts.app')


@section('content')
    <div class="container">
       <div class="row card">
           <div class="col-6 card-body">
               <ul class="list-group">
    
                <li class="list-group-item active text-center"> {{ $customer->nombre }}</li>
                   <li class="list-group-item bg-warning">{{ $customer->correo }}</li>
                   <li class="list-group-item bg-warning" aria-disabled="true">{{ $customer->direccion }}</li>
                   <li class="list-group-item bg-warning" aria-disabled="true">{{ $customer->telefono }}</li>
               </ul>
               <a href="{{ route('customers.index') }}" class="btn btn-danger mt-2">Volver</a>
           </div>
       </div>
    
        
    </div>
@endsection