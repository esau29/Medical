<?php

namespace App\Http\Controllers;

use App\Models\consultorio;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['listaAPI'] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultorio = consultorio::all();
        return view('pages.admin.consultorios.index')->with('lista', $consultorio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.consultorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultorio = new Consultorio;
        $consultorio->nombreconsultorio = $request->input('nombre');
        $consultorio->direccion = $request->input('direccion');
        $consultorio->email = $request->input('email');
        $consultorio->save();
        
        return redirect('admin/consultorios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function show(consultorio $consultorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function edit(consultorio $consultorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consultorio $consultorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(consultorio $consultorio)
    {
        //
    }

    public function listaAPI(Request $request){
        if( $request->user()!=null ) {
            $consultorio = consultorio::all();
            return $consultorio;
        }
        return "[]";
    }
}
