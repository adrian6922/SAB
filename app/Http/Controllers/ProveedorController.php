<?php

namespace App\Http\Controllers;
use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores= Proveedor::all();
        return view('Administrador.proveedor',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertar= new Proveedor();
        $insertar->rut = $request->input('rut');
        $insertar->razon_social= $request->input('razon_social');
        $insertar->forma_pago= $request->input('forma_pago');
        $insertar->descuento=$request->input('descuento');
        $insertar->direccion= $request->input('direccion');
        $insertar->region= $request->input('region');
        $insertar->comuna= $request->input('comuna');
        $insertar->telefono= $request->input('telefono');
        $insertar->email= $request->input('email');
        $insertar->contacto= $request->input('contacto');
        $insertar->comentario= $request->input('comentario');
        $insertar->save();

        return redirect()->route('Proveedor.index')->with('status', 'Se ha creado un nuevo Proveedor');
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
        $item= Proveedor::find($id);
        return view('Administrador.proveedor.edit',compact('item'));
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
        $nuevoRut= $request->input('rut');
        $nuevoRazon_social= $request->input('razon_social');
        $nuevoForma_pago= $request->input('forma_pago');
        $nuevoDescuento= $request->input('descuento');
        $nuevoDireccion= $request->input('direccion');
        $nuevoRegion= $request->input('region');
        $nuevoComuna= $request->input('comuna');
        $nuevoTelefono= $request->input('telefono');
        $nuevoEmail= $request->input('email');
        $nuevoContacto= $request->input('contacto');
        $nuevoComentario= $request->input('comentario');

        $item=Proveedor::find($id);
        $item->rut=$nuevoRut;
        $item->razon_social=$nuevoRazon_social;
        $item->forma_pago=$nuevoForma_pago;
        $item->descuento=$nuevoDescuento;
        $item->direccion=$nuevoDireccion;
        $item->region=$nuevoRegion;
        $item->comuna=$nuevoComuna;
        $item->telefono=$nuevoTelefono;
        $item->email=$nuevoEmail;
        $item->contacto=$nuevoContacto;
        $item->comentario=$nuevoComentario;
        $item->save();
        return redirect()->route('Proveedor.index',[$item->id])->with('status','Proveedor Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor= Proveedor::find($id);
        $proveedor->delete();

        return redirect()->route('Proveedor.index')->with('delete','Se ha eliminado el Proveedor');
    }
}
