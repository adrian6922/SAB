@extends('layouts.admin')

@section('title','Operacion')

@section('content')
    
<div class="container col-md-12 text-center">
    <a href="{{ url('/administrador/Material/create')}}" class="btn btn-info">Agregar Materiales</a>

    <table id="tabla" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Centro</th>
                <th scope="col">Descripción</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($operaciones as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->centro}}</th>
                    <td>{{$item->descripcion}}</td>
                    
                    <td>
                        <a href="/administrador/Material/{{$item->id}}/edit" class="btn btn-light mostrar">Modificar</a>
                        <a href="/administrador/Material/{{$item->id}}/destroy" class="btn btn-danger eliminar"  class="botonEliminar" onclick="return confirm('Esta seguro que desea eliminar este material?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <br><br><br>
@endsection
