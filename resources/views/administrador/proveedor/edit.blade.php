@extends('layouts.admin')

@section('title','Actualizar-Proveedor')

@section('content')

<div class="col-md-12">
        @include('common.errors')

        <form class="form-group" action="/administrador/Proveedor/{{$item->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
         @csrf
        <legend>Modificar Datos Proveedor</legend>
        <div class="form-row">
            <div class=" form-group col-md-2">
                <label for="rut">Rut</label>
            <input type="text" name="rut" id="rut" class="form-control" value="{{$item->rut}}">
            </div>

            <div class="form-group col-md-2">
                <label for="razon_social">Razón Social</label>
            <input type="text" name="razon_social" id="razon_social" class="form-control" value="{{$item->razon_social}}">
            </div>

            <div class="form-group col-md-2">
                <label for="forma_pago">Forma de Pago</label>
                <select name="forma_pago" id="forma_pago" class="form-control">
                <option value="{{$item->forma_pago}}"></option>
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
            <input type="number" name="descuento" id="descuento" class="form-control" value="{{$item->descuento}}">
            </div>

            <div class="form-group col-md-2">
                <label for="region">Región</label>
                <input type="text" name="region" id="region" class="form-control" value="{{$item->region}}">
            </div>

            <div class="form-group col-md-2">
                <label for="comuna">Comuna</label>
                <input type="text" name="comuna" id="comuna" class="form-control" value="{{$item->comuna}}">
            </div>

            <div class="form-group col-md-3">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="{{$item->direccion}}">
            </div>

            <div class="form-group col-md-2">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" id="telefono" class="form-control" value="{{$item->telefono}}">
            </div>

            <div class="form-group col-md-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$item->email}}">
            </div>

            <div class="form-group col-md-2">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" id="contacto" class="form-control" value="{{$item->contacto}}">
            </div>

            <div class="form-group col-md-2">
                <label for="comentario">Comentario</label>
                <input type="text" name="comentario" id="comentario" class="form-control" value="{{$item->comentario}}">
            </div>
           
            <button type="submit" class="btn btn-primary" id="guardar">Actualizar</button>
        </div>  
</div>
@endsection