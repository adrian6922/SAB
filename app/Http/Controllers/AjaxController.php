<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Proveedor;
use App\Material;
use App\Producto_OrdenCompra;
use App\OrdenCompra;


class AjaxController extends Controller
{   //Consulta de los proveedores
    public function search_proveedor(Request $request){
        if($request->ajax()) {

            $consulta = Proveedor::where("rut", $request->dato)->first();

            if ($consulta) {
                return Response($consulta);
            }
            
        return 0;
        }
    }

    //Consulta de los materiales
    public function search_materiales(Request $request){
        if($request->ajax()) {

            $consulta = Material::where("sku", $request->dato)->first();

            if ($consulta) {
                return Response($consulta);
            }
            
        return 0;
        }
    }

    //Guardar productos de orden de compra
    public function save_producto(Request $request){
        if($request->ajax()){

            $consulta_id = Producto_OrdenCompra::where('id_orden', $request->id)->first();
            $consulta_sku = Producto_OrdenCompra::where('sku', $request->sku)->first();

            if($consulta_id and $consulta_sku){
                $output=0;
            }else{
                $insertar= new Producto_OrdenCompra();
                $insertar->id_orden=$request->id;
                $insertar->sku= $request->sku;
                $insertar->descripcion=$request->descripcion;
                $insertar->cantidad=$request->cantidad;
                $insertar->precio_unitario=$request->precio_unitario;
                $insertar->total_unitario=$request->total_unitario;
                $insertar->save();
                
                $datos=Producto_OrdenCompra::all()->where('id_orden',$request->id);
                $output='';
                foreach($datos as $item){
                    $output .= "<tr id'".$item->id."'>
                    <td>".$item->sku."</td>
                    <td>".$item->descripcion."</td>
                    <td>".$item->cantidad."</td>
                    <td>".$item->precio_unitario."</td>
                    <td>".$item->total_unitario."</td>
                    <td><i class='fas fa-trash basura' onclick='delete_product(".$item->id.")'></i></td></tr>";

                }
            }
            return Response($output);
        }
    }
        # eliminar imagen del inmueble
    public function delete_producto($id) {
            
        $consulta = Producto_OrdenCompra::find($id);
        
        if ($consulta) {
            $consulta->delete();
            $output=1;
        } else {
            $output = 0;
        }
        
        return Response($output);

    
    }
    }

