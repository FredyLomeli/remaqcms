<?php

namespace App\Http\Controllers;

use App\information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacion = [
            'nombre' => information::where('name','nombre')->value('value'),
            'telefono' => information::where('name','telefono')->value('value'),
            'horario' => information::where('name','horario')->value('value'),
            'email' => information::where('name','email')->value('value'),
            'direccion' => information::where('name','direccion')->value('value'),
            'municipio' => information::where('name','municipio')->value('value'),
            'estado' => information::where('name','estado')->value('value'),
            'no_whatsapp' => information::where('name','no_whatsapp')->value('value'),
            'facebook' => information::where('name','facebook')->value('value'),
            'instagram' => information::where('name','instagram')->value('value'),
            'descripcion_empresa' => information::where('name','descripcion_empresa')->value('value'),
            'informacion_footer' => information::where('name','informacion_footer')->value('value'),
        ];
        return view('admin.informacion', compact('informacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required|string|between:1,499',
            'telefono' => 'required|string|between:1,499',
            'horario' => 'required|string|between:1,499',
            'email' => 'required|string|between:1,499',
            'direccion' => 'required|string|between:1,499',
            'municipio' => 'required|string|between:1,499',
            'estado' => 'required|string|between:1,499',
            'no_whatsapp' => 'required|string|between:1,499',
            'facebook' => 'required|string|between:1,499',
            'instagram' => 'required|string|between:1,499',
            'descripcion_empresa' => 'required|string|between:1,499',
            'informacion_footer' => 'required|string|between:1,499',
        ]);
        $informacion = new information;
        $informacion->actualizarInformacion('nombre', $data['nombre']);
        $informacion->actualizarInformacion('telefono', $data['telefono']);
        $informacion->actualizarInformacion('horario', $data['horario']);
        $informacion->actualizarInformacion('email', $data['email']);
        $informacion->actualizarInformacion('direccion', $data['direccion']);
        $informacion->actualizarInformacion('municipio', $data['municipio']);
        $informacion->actualizarInformacion('estado', $data['estado']);
        $informacion->actualizarInformacion('no_whatsapp', $data['no_whatsapp']);
        $informacion->actualizarInformacion('facebook', $data['facebook']);
        $informacion->actualizarInformacion('instagram', $data['instagram']);
        $informacion->actualizarInformacion('descripcion_empresa', $data['descripcion_empresa']);
        $informacion->actualizarInformacion('informacion_footer', $data['informacion_footer']);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('informacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(information $information)
    {
        //
    }
}
