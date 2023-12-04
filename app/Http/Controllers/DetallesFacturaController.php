<?php

namespace App\Http\Controllers;

use App\Models\DetallesFactura;
use Illuminate\Http\Request;

/**
 * Class DetallesFacturaController
 * @package App\Http\Controllers
 */
class DetallesFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesFacturas = DetallesFactura::paginate();

        return view('detalles-factura.index', compact('detallesFacturas'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesFacturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesFactura = new DetallesFactura();
        return view('detalles-factura.create', compact('detallesFactura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallesFactura::$rules);

        $detallesFactura = DetallesFactura::create($request->all());

        return redirect()->route('detalles-facturas.index')
            ->with('success', 'DetallesFactura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesFactura = DetallesFactura::find($id);

        return view('detalles-factura.show', compact('detallesFactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesFactura = DetallesFactura::find($id);

        return view('detalles-factura.edit', compact('detallesFactura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallesFactura $detallesFactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesFactura $detallesFactura)
    {
        request()->validate(DetallesFactura::$rules);

        $detallesFactura->update($request->all());

        return redirect()->route('detalles-facturas.index')
            ->with('success', 'DetallesFactura updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesFactura = DetallesFactura::find($id)->delete();

        return redirect()->route('detalles-facturas.index')
            ->with('success', 'DetallesFactura deleted successfully');
    }
}
