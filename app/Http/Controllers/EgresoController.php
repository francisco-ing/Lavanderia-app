<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\servicio_clinico;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Servicio_clinico::where('nombre', $request->POST('servicio'))
        ->update([
            'cantidad' => DB::raw('cantidad - ' . $request->input('cantidad'))
        ]);
        $egresos = new Egreso;
        $egresos->id=$request->POST('id');
        $egresos->encargado=auth()->user()->name;
        $egresos->fecha=$request->POST('fecha');
        $egresos->hora=$request->POST('hora');
        $egresos->ser_clinico=$request->POST('servicio');
        $egresos->tipo_rosa=$request->POST('tipo_ropa');
        $egresos->cantidad=$request->POST('cantidad');
        $egresos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function show(Egreso $egreso)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Egreso $egreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Egreso $egreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egreso $egreso)
    {
        //
    }
}
