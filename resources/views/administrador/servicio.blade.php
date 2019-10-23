@extends('layouts.admin')

@section('title','Material')

@section('content')
    
<div class="container col-md-12 text-center">
    <a href="{{ url('/administrador/Servicio/create')}}" class="btn btn-info">Agregar Servicio</a>

    <table id="tabla" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Primer Clasificacion</th>
                <th scope="col">Segunda Clasificacion</th>
                <th scope="col">Categoria</th>
                <th scope="col">SKU</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Unidad Medida</th>
                <th scope="col">Modelo</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($servicios as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->primera_clasificacion}}</th>
                    <td>{{$item->segunda_clasificacion}}</td>
                    <td>{{$item->categoria}}</td>
                    <td>{{$item->sku}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->unidad_medida}}</td>
                    <td>{{$item->modelo}}</td>
                    <td>
                        <a href="/administrador/Servicio/{{$item->id}}/edit" class="btn btn-light mostrar">Modificar</a>
                        <a href="/administrador/Servicio/{{$item->id}}/destroy" class="btn btn-danger eliminar"  class="botonEliminar" onclick="return confirm('Esta seguro que desea eliminar este servicio?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <br><br><br>
@endsection
