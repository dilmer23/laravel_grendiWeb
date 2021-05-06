<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietarios =  Propietario::all();

        return view('propietario.index')->with('propietarios',$propietarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propietarios = new Propietario();

        $propietarios->nombre =$request->get('nombre');
        $propietarios->apellido =$request->get('apellido');
        $propietarios->telefono =$request->get('telefono');
        $propietarios->placa_vehiculo =$request->get('placa_vehiculo');
        $propietarios->marca =$request->get('marca');
        $propietarios->tipo_vehiculo =$request->get('tipo_vehiculo');
        $propietarios->documento =$request->get('documento');

        $propietarios->save();
        return redirect('/propietarios');
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
        $propietario =Propietario::find($id);

        return view('propietario.edit')->with('propietario',$propietario);
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
        $propietario =Propietario::find($id);

        $propietario->nombre =$request->get('nombre');
        $propietario->apellido =$request->get('apellido');
        $propietario->telefono =$request->get('telefono');
        $propietario->placa_vehiculo =$request->get('placa_vehiculo');
        $propietario->marca =$request->get('marca');
        $propietario->tipo_vehiculo =$request->get('tipo_vehiculo');
        $propietario->documento =$request->get('documento');

        $propietario->save();
        return redirect('/propietarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propietario = Propietario::find($id);
        $propietario->delete();
        return redirect('/propietarios')->with('eliminar','ok');
    }
}
