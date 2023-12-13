<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\Ingreso;
use App\Models\Transaccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $busqueda=trim($request->get('busqueda'));

        $egresos=DB::table('egreso')
            ->select('id', 'encargado', 'fecha', 'hora', 'cantidad')
            ->where('id', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('fecha', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('cantidad', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('encargado', 'LIKE', '%'.$busqueda.'%')
            ->paginate(10);

        $ingresos=DB::table('ingreso')
            ->select('id', 'encargado', 'fecha', 'hora', 'cod_lote','cantidad')
            ->where('id', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('fecha', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('cantidad', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('encargado', 'LIKE', '%'.$busqueda.'%')
            ->orWhere('cod_lote', 'LIKE', '%'.$busqueda.'%')
            ->paginate(10);

        return view('transaccion', compact('egresos', 'ingresos', 'busqueda'));
    }

    public function generarReporte($busqueda = null)
    {
        // Aplica el filtro según el valor de $busqueda
        $query = Ingreso::query();
        $query2 = Egreso::query();

        $query->where(function ($query) use ($busqueda) {
            $query->where('encargado', $busqueda)
                  ->orWhere('fecha', $busqueda)
                  ->orWhere('encargado', 'LIKE', '%' . $busqueda . '%'); // Puedes agregar más condiciones OR según sea necesario
        });

        $query2->where('encargado', $busqueda);

        $transacciones = $query->get();
        $transacciones2 = $query2->get();

        $pdf = PDF::loadView('reporte', compact('transacciones','transacciones2'));
        return $pdf->download('reporte.pdf');
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
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function show(Transaccion $transaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaccion $transaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaccion $transaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaccion $transaccion)
    {
        //
    }
}
