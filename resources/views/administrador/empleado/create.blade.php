@extends('layouts.admin')

@section('title','Registro-Empleado')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Empleado" method="POST" enctype="multipart/form-data">
        @csrf
        <legend>Registro Empleado</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="rut">Rut</label>
                <input type="text" name="rut" id="rut" oninput="checkRut(this)"  class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="cargo">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="funciones">Funciones</label>
                <input type="text" name="funciones" id="funciones" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="comentario">Observacion</label>
                <input type="text" name="observacion" id="observacion" class="form-control">
            </div>
            <div class="form-group col-md-0">
                <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
            </div>

            <div class="form-group col-md-0">
                <button type="reset" class="btn btn-danger" id="guardar">Limpiar</button>
            </div>
            
        </div>  
</div>
@endsection