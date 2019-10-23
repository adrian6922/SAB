<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados= Empleado::all();
        return view('Administrador.empleado',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $insertar= new Empleado();
        $insertar->rut = $request->input('rut');
        $insertar->nombre= $request->input('nombre');
        $insertar->apellido= $request->input('apellido');
        $insertar->cargo= $request->input('cargo');
        $insertar->funciones= $request->input('funciones');
        $insertar->observacion= $request->input('observacion');
        $insertar->save();

        return redirect()->route('Empleado.index')->with('status', 'Se ha agregado un nuevo Empleado');
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
        $item= Empleado::find($id);
        return view('Administrador.empleado.edit',compact('item'));
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
        $nuevoNombre= $request->input('nombre');
        $nuevoApellido= $request->input('apellido');
        $nuevoCargo= $request->input('cargo');
        $nuevoFunciones= $request->input('funciones');
        $nuevoObservacion= $request->input('observacion');

        $item=Empleado::find($id);
        $item->rut=$nuevoRut;
        $item->nombre=$nuevoNombre;
        $item->apellido=$nuevoApellido;
        $item->cargo=$nuevoCargo;
        $item->funciones=$nuevoFunciones;
        $item->observacion=$nuevoObservacion;
        $item->save();
        return redirect()->route('Empleado.index',[$item->id])->with('status','Empleado Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado= Empleado::find($id);
        $empleado->delete();

        return redirect()->route('Empleado.index')->with('delete','Se ha eliminado al Empleado');
    }
}
