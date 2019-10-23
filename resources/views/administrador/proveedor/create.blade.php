@extends('layouts.admin')

@section('title','Registro-Proveedor')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Proveedor" method="POST" enctype="multipart/form-data">
        @csrf
        <legend>Registro Proveedor</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="rut">Rut</label>
                <input type="text" name="rut" id="rut" oninput="checkRut(this)"  class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="razon_social">Razón Social</label>
                <input type="text" name="razon_social" id="razon_social" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="forma_pago">Forma de Pago</label>
                <select name="forma_pago" id="forma_pago" class="form-control" required>
                    <option value="seleccione">Seleccione</option>
                    <option value="efectivo">Efectivo</option>
                    <option value="credito_15">Credito(15 dias)</option>
                    <option value="credito_30">Credito(30 dias)</option>
                    <option value="credito_45">Credito(45 dias)</option>
                    <option value="credito_60">Credito(60 dias)</option>
                    <option value="credito_90">Credito(90 dias)</option>
                    <option value="credito_120">Credito(120 dias)</option>
                </select>
            </div>

            <div class="form-group col-md-1">
                <label for="descuento">% Descuento</label>
                <input type="number" name="descuento" id="descuento" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="region">Región</label>
                <select name="region" id="regiones" class="form-control" required></select>
            </div>

            <div class="form-group col-md-2">
                <label for="comuna">Comuna</label>
                <select name="comuna" id="comunas" class="form-control" required></select>
            </div>

            <div class="form-group col-md-3">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" id="telefono" class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" id="contacto" class="form-control" required>
            </div>

            <div class="form-group col-md-2">
                <label for="comentario">Comentario</label>
                <input type="text" name="comentario" id="comentario" class="form-control">
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
