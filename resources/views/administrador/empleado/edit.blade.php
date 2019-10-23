@extends('layouts.admin')

@section('title','Actualizar-Empleado')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Empleado/{{$item->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
         @csrf
        <legend>Modificar Datos Empleado</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="rut">Rut</label>
                <input type="text" name="rut" id="rut" class="form-control" value="{{$item->rut}}">
            </div>

            <div class="form-group col-md-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$item->nombre}}">
            </div>

            <div class="form-group col-md-2">
                <label for="region">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{$item->apellido}}">
            </div>

            <div class="form-group col-md-2">
                <label for="comuna">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control" value="{{$item->cargo}}">
            </div>

            <div class="form-group col-md-3">
                <label for="direccion">Funciones</label>
                <input type="text" name="funciones" id="funciones" class="form-control" value="{{$item->funciones}}">
            </div>

            <div class="form-group col-md-2">
                <label for="contacto">Observación</label>
                <input type="text" name="observacion" id="observacion" class="form-control" value="{{$item->observacion}}">
            </div>
           
            <button type="submit" class="btn btn-primary" id="guardar">Actualizar</button>
        </div>  
</div>
@endsection