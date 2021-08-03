<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['cliente']=Clientes::paginate(4); //toma los primeros 5 registros y los muestra en el index
        return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'Nombre_usuario' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'Ciudad' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Foto' => 'required| max:10000| mimes: jpeg,png,jpg'
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'Ciudad.required' => 'La ciudad es requerida',
            'Foto.required' => 'La foto es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosCliente = request()->except('_token');

        //esto es para obtener el nombre correcto del nombre de la foto
        if($request->hasFile('Foto')){
            $datosCliente['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Clientes::insert($datosCliente);
        //return response()->json($datosCliente);
        return redirect('cliente/')->with('mensaje','Se agrego un cliente correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente=Clientes::findOrFail($id);
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //


        $campos=[
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'Nombre_usuario' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'Ciudad' => 'required|string|max:100',
            'Correo' => 'required|email',
           
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'Ciudad.required' => 'La ciudad es requerida',
        ];

        if($request->hasFile('Foto'))
        {
            $campos=[ 'Foto' => 'required| max:10000| mimes: jpeg,png,jpg'];
            $mensaje=[ 'Foto.required' => 'La foto es requerida'];
        }
        
        $this->validate($request,$campos,$mensaje);


        $datosCliente = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $cliente=Clientes::findOrFail($id);
            Storage::delete('public/'.$cliente->Foto);
            $datosCliente['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Clientes::where('id','=',$id)->update($datosCliente);
        $cliente=Clientes::findOrFail($id);
        //return view('cliente.edit',compact('cliente'));
        return redirect('cliente')->with('mensaje','Se edito informacion del cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cliente=Clientes::findOrFail($id);
        if(Storage::delete('public/'.$cliente->Foto)){
            Clientes::destroy($id);
        }
        
        return redirect('cliente')->with('mensaje','Se borro el cliente');
    }
}
