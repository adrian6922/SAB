<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= Cliente::all();
        return view('Administrador.cliente',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertar= new Cliente();
        $insertar->rut = $request->input('rut');
        $insertar->razon_social= $request->input('razon_social');
        $insertar->direccion= $request->input('direccion');
        $insertar->region= $request->input('region');
        $insertar->comuna= $request->input('comuna');
        $insertar->telefono= $request->input('telefono');
        $insertar->email= $request->input('email');
        $insertar->contacto= $request->input('contacto');
        $insertar->comentario= $request->input('comentario');
        $insertar->save();

        return redirect()->route('Cliente.index')->with('status', 'Se ha creado un nuevo Cliente');
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
        $item= Cliente::find($id);
        return view('Administrador.cliente.edit',compact('item'));
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
        $nuevoDireccion= $request->input('direccion');
        $nuevoRegion= $request->input('region');
        $nuevoComuna= $request->input('comuna');
        $nuevoTelefono= $request->input('telefono');
        $nuevoEmail= $request->input('email');
        $nuevoContacto= $request->input('contacto');
        $nuevoComentario= $request->input('comentario');

        $item=Cliente::find($id);
        $item->rut=$nuevoRut;
        $item->razon_social=$nuevoRazon_social;
        $item->direccion=$nuevoDireccion;
        $item->region=$nuevoRegion;
        $item->comuna=$nuevoComuna;
        $item->telefono=$nuevoTelefono;
        $item->email=$nuevoEmail;
        $item->contacto=$nuevoContacto;
        $item->comentario=$nuevoComentario;
        $item->save();
        return redirect()->route('Cliente.index',[$item->id])->with('status','Cliente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente= Cliente::find($id);
        $cliente->delete();

        return redirect()->route('Cliente.index')->with('delete','Se ha eliminado el Cliente');
    }
}
