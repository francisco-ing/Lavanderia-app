<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\AvisosMailable;
use App\Models\servicio_clinico;
use Illuminate\Http\Request;

class ServicioClinicoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servicio_clinico  $servicio_clinico
     * @return \Illuminate\Http\Response
     */
    public function show(servicio_clinico $servicio_clinico)
    {
        $servicio_clinico = Servicio_clinico::where('cantidad', '<', 15)->get();
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
        //
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
