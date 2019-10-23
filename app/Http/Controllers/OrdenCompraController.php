<?php

namespace App\Http\Controllers;
use App\OrdenCompra;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordencompras = OrdenCompra::all();
        return view('Administrador.ordencompra',compact('ordencompras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    //validacion para traer el correlativo
        $consulta = OrdenCompra::all()->last();
        if (!$consulta) {
            $id = 0;
        } else {
            $id = $consulta->id;
        }
        $orden = $id + 1;
        return view('Administrador.ordencompra.create',compact('orden'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consulta=OrdenCompra::where('id',$request->id)->first();

        if($consulta){
            return redirect()->route('OrdenCompra.index')->with('delete', 'Ya existe ese numero de orden intente de nuevo!');
        }

        $insertar=new OrdenCompra();
        $insertar->rut = $request->rut;
        $insertar->razon_social=$request->razon_social;
        $insertar->forma_pago=$request->forma_pago;
        $insertar->direccion=$request->direccion;
        $insertar->comuna=$request->comuna;
        $insertar->fecha_documento=$request->fecha_documento;
        $insertar->save();

        return redirect()->route('OrdenCompra.index')->with('status', 'Se ha creado una nueva Orden de Compra');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordencompra= OrdenCompra::find($id);
        $ordencompra->delete();

        return redirect()->route('OrdenCompra.index')->with('delete','Se ha eliminado la Orden de Compra');
    }
}
