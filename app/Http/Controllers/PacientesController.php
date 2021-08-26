<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PacientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['loginAPI'] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '<h1>Pacientes</h1>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '<h1>Detalles Pacientes</h1>';
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pacientes $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(pacientes $pacientes)
    {
        //
    }

    public function loginAPI(Request $request){
        if( Auth::guard('webPacientes')->attempt(['usuario' => $request->input('u'), 'password' => $request->input('p')]) ) {
            $token = Str::random(60);
            Auth::guard('webPacientes')->user()->forceFill(['api_token' => hash('sha256', $token)])->save();
            return '{"respuesta":"Paciente identificado", "Pacientes": ' . Auth::guard('webPacientes')->user() . ', "Token:":"' . $token . '"}';
        }
        return '{"respuesta":"Paciente no identificado"}';
    }
}
