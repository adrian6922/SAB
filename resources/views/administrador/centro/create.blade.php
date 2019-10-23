@extends('layouts.admin')

@section('title','Registro-Centro')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Centro" method="POST" enctype="multipart/form-data">
        @csrf
        <legend>Registro Centro</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="centro">Centro</label>
                <input type="text" name="centro" id="centro" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
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