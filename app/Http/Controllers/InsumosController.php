<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['insumos']=Insumos::paginate(4); //toma los primeros 4 registros y los muestra en el index
        return view('insumos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Cantidad' => 'required|integer',
            'Precio' => 'required|integer',
            
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'Cantidad.required' => 'La cantidad es requerida',
            
        ];

        $this->validate($request,$campos,$mensaje);

        $datosInsumo = request()->except('_token');

       

        Insumos::insert($datosInsumo);
        //return response()->json($datosCliente);
        return redirect('insumos/')->with('mensaje','Se agrego un insumo correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function show(Insumos $insumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumos=Insumos::findOrFail($id);
        return view('insumos.edit',compact('insumos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Cantidad' => 'required|integer',
            'Precio' => 'required|integer',
            
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'Cantidad.required' => 'La cantidad es requerida',
            
        ];

        $this->validate($request,$campos,$mensaje);

        $datosInsumo = request()->except(['_token','_method']);

        Insumos::where('id','=',$id)->update($datosInsumo);
        $insumos=Insumos::findOrFail($id);
        return redirect('insumos')->with('mensaje','Se edito informacion de un insumo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
        Insumos::destroy($id);        
        return redirect('insumos')->with('mensaje','Se borro un insumo');
    }
}
