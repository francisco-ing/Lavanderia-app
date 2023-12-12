<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\AvisosMailable;
use App\Models\servicio_clinico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServicioClinicoController extends Controller
{

    protected $primaryKey = 'nombre';
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        $nombreServicio = $request->input('servicio');
        $cantidad = $request->POST('servicio');

        $cantidadActual = Servicio_clinico::where('nombre', $nombreServicio)->value('cantidad');

        if  ( $cantidadActual > $cantidad ){
            Servicio_clinico::where('nombre', $request->POST('servicio'))
            ->update([
                'cantidad' => DB::raw('cantidad - ' . $request->input('cantidad'))
            ]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servicio_clinico  $servicio_clinico
     * @return \Illuminate\Http\Response
     */
    public function show(servicio_clinico $servicio_clinico)
    {
        $servicio_clinico = Servicio_clinico::where('cantidad', '<', 5)->get();
        return view('home', ['servicio_clinicos' => $servicio_clinico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servicio_clinico  $servicio_clinico
     * @return \Illuminate\Http\Response
     */
    public function edit(servicio_clinico $servicio_clinico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servicio_clinico  $servicio_clinico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servicio_clinico $servicio_clinico)
    {

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servicio_clinico  $servicio_clinico
     * @return \Illuminate\Http\Response
     */
    public function destroy(servicio_clinico $servicio_clinico)
    {
        //
    }
}
