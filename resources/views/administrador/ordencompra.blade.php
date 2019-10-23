@extends('layouts.admin')

@section('title','Orden Compra')

@section('content')
    
<div class="container col-md-12 text-center">
    <br>
        @include('common.errors')
        @include('common.success')

    <a href="{{ url('/administrador/OrdenCompra/create')}}" class="btn btn-info">Crear Orden de Compra</a>
    
    <table class="table table-hover datatable">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Fecha</th>
                <th scope="col">Rut Proveedor</th>
                <th scope="col">Razon Social</th>
                <th scope="col">Forma Pago</th>
                <th scope="col">Dirección</th>
                <th scope="col">Comuna</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($ordencompras as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->fecha_documento}}</th>
                    <td>{{$item->rut}}</th>
                    <td>{{$item->razon_social}}</td>
                    <td>{{$item->forma_pago}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->comuna}}</td>
                    <td>
                        <a href=""class="btn btn-light mostrar">visualizar</a>
                        <a href="/administrador/OrdenCompra/{{$item->id}}/edit" class="btn btn-light mostrar">Modificar</a>
                        {{--<a href="/administrador/OrdenCompra/{{$item->id}}/destroy" class="btn btn-danger eliminar"  class="botonEliminar" onclick="return confirm('Esta seguro que desea eliminar esta orden de compra?')">Eliminar</a>--}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <br><br><br>
@endsection
