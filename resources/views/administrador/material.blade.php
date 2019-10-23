@extends('layouts.admin')

@section('title','Material')

@section('content')
    
<div class="container col-md-12 text-center">
    <a href="{{ url('/administrador/Material/create')}}" class="btn btn-info">Agregar Materiales</a>

    <table class="table table-hover table-responsive datatable">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Primera Clasificación</th>
                <th scope="col">Segunda Clasificación</th>
                <th scope="col">Categoria</th>
                <th scope="col">SKU</th>
                <th scope="col">Descripción</th>
                <th scope="col">SKU-Parte</th>
                <th scope="col">Stock Minimo</th>
                <th scope="col">Unidad Medida</th>
                <th scope="col">Modelo</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($materiales as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->primera_clasificacion}}</th>
                    <td>{{$item->segunda_clasificacion}}</td>
                    <td>{{$item->categoria}}</td>
                    <td>{{$item->sku}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->sku_parte}}</td>
                    <td>{{$item->stock_minimo}}</td>
                    <td>{{$item->unidad_medida}}</td>
                    <td>{{$item->modelo}}</td>
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
