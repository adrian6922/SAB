@extends('layouts.admin')

@section('title','Registro-Centro')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Centro/{{$item->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
             @csrf
        <legend>Modificar Datos Centro</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="centro">Centro</label>
            <input type="text" name="centro" id="centro" class="form-control" value="{{$item->centro}}" required>
            </div>

            <div class="form-group col-md-3">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{$item->ubicacion}}" required>
            </div>

            <div class="form-group col-md-2">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$item->descripcion}}" required>
            </div>
            
            <button type="submit" class="btn btn-primary" id="guardar">Actualizar</button>
        </div>  
</div>
@endsection