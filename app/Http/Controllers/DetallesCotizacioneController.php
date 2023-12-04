<?php

namespace App\Http\Controllers;

use App\Models\DetallesCotizacione;
use Illuminate\Http\Request;

/**
 * Class DetallesCotizacioneController
 * @package App\Http\Controllers
 */
class DetallesCotizacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesCotizaciones = DetallesCotizacione::paginate();

        return view('detalles-cotizacione.index', compact('detallesCotizaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesCotizaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesCotizacione = new DetallesCotizacione();
        return view('detalles-cotizacione.create', compact('detallesCotizacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallesCotizacione::$rules);

        $detallesCotizacione = DetallesCotizacione::create($request->all());

        return redirect()->route('detalles-cotizaciones.index')
            ->with('success', 'DetallesCotizacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesCotizacione = DetallesCotizacione::find($id);

        return view('detalles-cotizacione.show', compact('detallesCotizacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesCotizacione = DetallesCotizacione::find($id);

        return view('detalles-cotizacione.edit', compact('detallesCotizacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallesCotizacione $detallesCotizacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesCotizacione $detallesCotizacione)
    {
        request()->validate(DetallesCotizacione::$rules);

        $detallesCotizacione->update($request->all());

        return redirect()->route('detalles-cotizaciones.index')
            ->with('success', 'DetallesCotizacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesCotizacione = DetallesCotizacione::find($id)->delete();

        return redirect()->route('detalles-cotizaciones.index')
            ->with('success', 'DetallesCotizacione deleted successfully');
    }
}
