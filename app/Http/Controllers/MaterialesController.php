<?php

namespace App\Http\Controllers;
use App\Material;
use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales= Material::all();
        return view('Administrador.material',compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertar= new Material();
        $insertar->primera_clasificacion = $request->input('primera_clasificacion');
        $insertar->segunda_clasificacion= $request->input('segunda_clasificacion');
        $insertar->categoria= $request->input('categoria');
        $insertar->sku=$request->input('sku');
        $insertar->descripcion= $request->input('descripcion');
        $insertar->sku_parte= $request->input('sku_parte');
        $insertar->stock_minimo= $request->input('stock_minimo');
        $insertar->unidad_medida= $request->input('unidad_medida');
        $insertar->modelo= $request->input('modelo');
        $insertar->save();

        return redirect()->route('Material.index')->with('status', 'Se ha creado un nuevo Material');
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
        $item= Material::find($id);
        return view('Administrador.material.edit',compact('item'));
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
        $nuevoSkuParte= $request->input('sku_parte');
        $nuevoStockMinimo= $request->input('stock_minimo');
        $nuevoUnidadMedida= $request->input('unidad_medida');
        $nuevoModelo= $request->input('modelo');

        $item=Material::find($id);
        $item->primera_clasificacion=$nuevoPrimeraClasificacion;
        $item->segunda_clasificacion=$nuevoSegungaClasificacion;
        $item->categoria=$nuevoCategoria;
        $item->sku=$nuevoSku;
        $item->descripcion=$nuevoDescripcion;
        $item->sku_parte=$nuevoSkuParte;
        $item->stock_minimo=$nuevoStockMinimo;
        $item->unidad_medida=$nuevoUnidadMedida;
        $item->modelo=$nuevoModelo;
        $item->save();
        return redirect()->route('Material.index',[$item->id])->with('status','Material Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material= Material::find($id);
        $material->delete();

        return redirect()->route('Material.index')->with('delete','Se ha eliminado el Material');
    }
}
