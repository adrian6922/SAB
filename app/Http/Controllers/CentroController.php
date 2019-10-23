<?php

namespace App\Http\Controllers;
use App\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centros= Centro::all();
        return view('Administrador.centro',compact('centros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.centro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertar= new Centro();
        $insertar->centro = $request->input('centro');
        $insertar->ubicacion= $request->input('ubicacion');
        $insertar->descripcion= $request->input('descripcion');
        $insertar->save();

        return redirect()->route('Centro.index')->with('status', 'Se ha creado un nuevo Centro');
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
        $item= Centro::find($id);
        return view('Administrador.centro.edit',compact('item'));
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
        $nuevoCentro= $request->input('centro');
        $nuevoUbicacion= $request->input('ubicacion');
        $nuevoDescripcion= $request->input('descripcion');

        $item=Centro::find($id);
        $item->centro=$nuevoCentro;
        $item->ubicacion=$nuevoUbicacion;
        $item->descripcion=$nuevoDescripcion;
        $item->save();
        return redirect()->route('Centro.index',[$item->id])->with('status','Centro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centro= Centro::find($id);
        $centro->delete();

        return redirect()->route('Centro.index')->with('delete','Se ha eliminado el Centro');
    }
}
