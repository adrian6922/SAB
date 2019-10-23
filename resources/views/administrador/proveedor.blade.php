@extends('layouts.admin')

@section('title','Proveedores')

@section('content')
    
<div class="container col-md-12 text-center">
    <a href="{{ url('/administrador/Proveedor/create')}}" class="btn btn-info">Agregar Proveedor</a>

    <table class="table table-hover table-responsive datatable">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Rut</th>
                <th scope="col">Razon Social</th>
                <th scope="col">Forma Pago</th>
                <th scope="col">% Descuento</th>
                <th scope="col">Región</th>
                <th scope="col">Comuna</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Contacto</th>
                <th scope="col">Comentario</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($proveedores as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->rut}}</th>
                    <td>{{$item->razon_social}}</td>
                    <td>{{$item->forma_pago}}</td>
                    <td>{{$item->descuento}}</td>
                    <td>{{$item->region}}</td>
                    <td>{{$item->comuna}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->contacto}}</td>
                    <td>{{$item->comentario}}</td>
                    <td>
                        <a href="/administrador/Proveedor/{{$item->id}}/edit" class="btn btn-light mostrar">Modificar</a>
                        <a href="/administrador/Proveedor/{{$item->id}}/destroy" class="btn btn-danger eliminar"  class="botonEliminar" onclick="return confirm('Esta seguro que desea eliminar este proveedor?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <br><br><br>
@endsection


