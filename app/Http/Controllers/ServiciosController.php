<?php

namespace App\Http\Controllers;
use App\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios= Servicio::all();
        return view('Administrador.servicio',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertar= new Servicio();
        $insertar->primera_clasificacion = $request->input('primera_clasificacion');
        $insertar->segunda_clasificacion= $request->input('segunda_clasificacion');
        $insertar->categoria= $request->input('categoria');
        $insertar->sku=$request->input('sku');
        $insertar->descripcion= $request->input('descripcion');
        $insertar->unidad_medida= $request->input('unidad_medida');
        $insertar->modelo= $request->input('modelo');
        $insertar->save();

        return redirect()->route('Servicio.index')->with('status', 'Se ha creado un nuevo Servicio');
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
        $item= Servicio::find($id);
        return view('Administrador.servicio.edit',compact('item'));
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
        $nuevoPrimeraClasificacion= $request->input('primera_clasificacion');
        $nuevoSegungaClasificacion= $request->input('segunda_clasificacion');
        $nuevoCategoria= $request->input('categoria');
        $nuevoSku= $request->input('sku');
        $nuevoDescripcion= $request->input('descripcion');
        $nuevoUnidadMedida= $request->input('unidad_medida');
        $nuevoModelo= $request->input('modelo');

        $item=Servicio::find($id);
        $item->primera_clasificacion=$nuevoPrimeraClasificacion;
        $item->segunda_clasificacion=$nuevoSegungaClasificacion;
        $item->categoria=$nuevoCategoria;
        $item->sku=$nuevoSku;
        $item->descripcion=$nuevoDescripcion;
        $item->unidad_medida=$nuevoUnidadMedida;
        $item->modelo=$nuevoModelo;
        $item->save();
        return redirect()->route('Servicio.index',[$item->id])->with('status','Servicio Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio= Servicio::find($id);
        $servicio->delete();

        return redirect()->route('Servicio.index')->with('delete','Se ha eliminado el Servicio');
    }
}
