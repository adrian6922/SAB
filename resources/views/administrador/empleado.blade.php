@extends('layouts.admin')

@section('title','Empleado')

@section('content')
    
<div class="container col-md-12 text-center">
    <a href="{{ url('/administrador/Empleado/create')}}" class="btn btn-info">Agregar Empleado</a>

    <table id="tabla" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cargo</th>
                <th scope="col">Funciones</th>
                <th scope="col">Observacion</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($empleados as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->rut}}</th>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->cargo}}</td>
                    <td>{{$item->funciones}}</td>
                    <td>{{$item->observacion}}</td>
                    <td>
                        <a href="/administrador/Empleado/{{$item->id}}/edit" class="btn btn-light mostrar">Modificar</a>
                        <a href="/administrador/Empleado/{{$item->id}}/destroy" class="btn btn-danger eliminar"  class="botonEliminar" onclick="return confirm('Esta seguro que desea eliminar este empleado?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <br><br><br>
@endsection
