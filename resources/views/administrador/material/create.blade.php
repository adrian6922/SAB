@extends('layouts.admin')

@section('title','Registro-Material')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Material" method="POST" enctype="multipart/form-data">
        @csrf
        <legend>Registro Material</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="primera_clasificacion">Primera Clasificacion</label>
                <input type="text" name="primera_clasificacion" id="primera_clasificacion" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="segunda_clasificacion">Segunda Clasificación</label>
                <input type="text" name="segunda_clasificacion" id="segunda_clasificacion" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control" required>
            </div>

            <div class="form-group col-md-1">
                <label for="sku">SKU</label>
                <input type="text" name="sku" id="sku" class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            </div>

            <div class="form-group col-md-1">
                <label for="sku_parte">SKU-Parte</label>
                <input type="text" name="sku_parte" id="sku_parte" class="form-control" required>
            </div>

            <div class="form-group col-md-1">
                <label for="stock_minimo">Stock Minimo</label>
                <input type="number" name="stock_minimo" id="stock_minimo" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="unidad_medida">Unidad Medida</label>
                <select name="unidad_medida" id="unidad_medida" class="form-control" required>
                    <option value="seleccione">Seleccione</option>
                    <option value="KG">KG</option>
                    <option value="LTS">LTS</option>
                    <option value="UND">UND</option>
                    <option value="MTS">MTS</option>
                    <option value="BIDON">BIDON</option>
                    <option value="GALON">GALON</option>
                    <option value="PAR">PAR</option>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" required>
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