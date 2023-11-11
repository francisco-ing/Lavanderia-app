<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use App\Models\servicio_clinico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        Servicio_clinico::where('nombre', $request->POST('servicio'))
        ->update([
            'cantidad' => DB::raw('cantidad + ' . $request->input('cantidad'))
        ]);
        $ingresos = new Ingreso;
        $ingresos->id=$request->POST('id');
        $ingresos->encargado=$request->POST('encargado');
        $ingresos->fecha=$request->POST('fecha');
        $ingresos->srv_clinico=$request->POST('servicio');
        $ingresos->tipo_ropa=$request->POST('tipo_ropa');
        $ingresos->hora=$request->POST('hora');
        $ingresos->cod_lote=$request->POST('cod_lote');
        $ingresos->cantidad=$request->POST('cantidad');
        $ingresos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
