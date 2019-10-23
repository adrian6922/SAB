@extends('layouts.admin')

@section('title','Registro-OrdenCompra')

@section('content')

<div class="col-md-12">
        @include('common.errors')
        @include('common.success')

        <legend>Registro Orden Compra</legend>
        <h2>Datos Proveedor</h2>
        <form action="{{route('OrdenCompra.store')}}" method="post" id="form">
                @csrf
            <div class="form-row">
                    <div class="form-group col-md-1">
                        <label for="rut">N° Orden</label>
                    <input type="number" name="id" id="id" class="form-control" value="{{$orden}}"  readonly>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="rut">Rut</label>
                        <input type="text" name="rut" id="rut" oninput="checkRut(this)" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="razon_social">Razón Social</label>
                        <input type="text" name="razon_social" id="razon_social" class="form-control" readonly>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="forma_pago">Forma Pago</label>
                        <input type="text" name="forma_pago" id="forma_pago" class="form-control" readonly>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" readonly>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="direccion">Comuna</label>
                        <input type="text" name="comuna" id="comuna" class="form-control" readonly>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="fecha_documento">Fecha</label>
                        <input type="text" name="fecha_documento" id="fecha_documento" class="form-control datepicker" required>
                    </div>
                </div>
            <hr>
        <!--separacion-->
            <h2>Datos Orden Compra</h2>
            <div class="form-row col-md-12">
                <div class="form-group col-md-1">
                        <label for="sku">Sku</label>
                        <input type="number" id="sku" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="descripcion" class="form-control" readonly>
                    </div>
            
                    <div class="form-group col-md-1">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="precio_unitario">Precio Unitario</label>
                        <input type="number" id="precio_unitario" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="total_unitario">Total Unitario</label>
                        <input type="number" id="total_unitario" class="form-control" required>
                    </div>


                    <div class="form-group col-md-2">
                        <div class="btn btn-primary agregar" id="agregar">Agregar</div>
                    </div>
            </div>

            <div class="col-md-12">
                    <br>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio Unitario</th>
                                    <th scope="col" colspan="2">Total Unitario</th>
                                </tr>
                            </thead>
                            <tbody id="datos"> 
                                <!-- traer datos de ajax -->
                            </tbody>
                        </table>
            </div>

            <div class="col-md-12 row">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                </div>
                
                <div class="form-group">
                    <button type="reset" class="btn btn-danger" id="guardar">Limpiar</button>
                </div>
            </div>
    </form>     
</div>
@endsection

@section('scripts')
<script type="text/javascript">
// script para el buscar datos del proveedor y asignar a los input-->
        $('#rut').change(function(){
            var rut =$('#rut').val()
            $.ajax({
                type : 'get',
                url : '/search_proveedor',
                beforeSend: function () {
                    // mostrar imagen mientras espera la peticion ajax
                    $("#mensaje").show();
                },
                data:{'dato':rut},
                success:function(data){
                    if (data == 0) {
                        alert('Ese rut no existe en la base de datos');
                        $("#mensaje").hide();
                    }
                    $("#mensaje").hide();
                    // acceder a los input y asignar los valores devueltos por la consulta ajax
                    $('#razon_social').val(data.razon_social);
                    $('#forma_pago').val(data.forma_pago);
                    $('#direccion').val(data.direccion);
                    $('#comuna').val(data.comuna);
                }
            });
        })

// script para el buscar datos de los materiales y llenar los input-->
        $('#sku').change(function(){
            var sku=$('#sku').val()
            $.ajax({
                type : 'get',
                url : '/search_materiales',
                beforeSend: function () {
                    // mostrar imagen mientras espera la peticion ajax
                    $("#mensaje").show();
                },
                data:{'dato':sku},
                success:function(data){
                    if (data == 0) {
                        alert('Ese sku no existe en la base de datos');
                        $("#mensaje").hide();
                    }
                    $("#mensaje").hide();
                    // acceder a los input y asignar los valores devueltos por la consulta ajax
                    $('#descripcion').val(data.descripcion);
                }
            });
        })

//script para el calculo de total unitario de los materiales-->
$("#precio_unitario").change(function() {
            var cantidad = $('#cantidad').val();
            var precio_unitario = $('#precio_unitario').val();
            var total_unitario = cantidad * precio_unitario;

            console.log(total_unitario);
            $('#total_unitario').val(total_unitario);
        });

//script para agregar los materiales
$("#agregar").click(function(){
    var id= $('#id').val();
    var sku=$('#sku').val();
    var descripcion=$('#descripcion').val();
    var cantidad=$('#cantidad').val();
    var precio_unitario=$('#precio_unitario').val();
    var total_unitario=$('#total_unitario').val();

    $.ajax({
        type:'get',
        url:'/save_producto',
        beforeSend:function(){
            //Mostrar imagen de carga mientra espera la peticion
            $("#mensaje").show();
        },
        data:{'id':id,  'sku':sku, 'descripcion':descripcion, 'cantidad':cantidad, 'precio_unitario':precio_unitario, 'total_unitario':total_unitario},
        success:function(data){

            console.log(data);
            if(data==0){
                alert('Este sku ya fue registrado en la orden de compra');
                $("#mensaje").hide();
            }else{
                $("#mensaje").hide();
                //acceder a los input y asignar los valore devueltos por la consulta ajax
                $("#datos").html(data);
            }
        }
    });
})

// funcion para eliminar productos con el icono de la basurita
function delete_product(id) {

$.ajax({
    type : 'get',
    url : '/delete_producto/'+id,
    beforeSend: function () {
        // mostrar imagen mientras espera la peticion ajax
        $("#mensaje").show();
    },
    success:function(data){
        
        if (data == 1) {
            $("#mensaje").hide();
            $("#"+id).remove();
        } else {
            alert('Ocurrio un error inesperado no se encontro el producto seleccionado');
        }
    }
});
}
</script>
@endsection