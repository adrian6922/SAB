@extends('layouts.admin')

@section('title','Material')

@section('content')
    
<div class="container col-md-12 text-center">
    <a href="{{ url('/administrador/Centro/create')}}" class="btn btn-info">Agregar Centro</a>

    <table id="tabla" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Centro</th>
                <th scope="col">Ubicacion</th>
                <th scope="col">Descripcion</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($centros as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->centro}}</th>
                    <td>{{$item->ubicacion}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <a href="/administrador/Centro/{{$item->id}}/edit" class="btn btn-light mostrar">Modificar</a>
                        <a href="/administrador/Centro/{{$item->id}}/destroy" class="btn btn-danger eliminar"  class="botonEliminar" onclick="return confirm('Esta seguro que desea eliminar este centro?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <br><br><br>
@endsection
