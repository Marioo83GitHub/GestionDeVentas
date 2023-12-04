<?php

namespace App\Http\Controllers;

use App\Models\Cotizacione;
use Illuminate\Http\Request;

/**
 * Class CotizacioneController
 * @package App\Http\Controllers
 */
class CotizacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacione::paginate();

        return view('cotizacione.index', compact('cotizaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $cotizaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cotizacione = new Cotizacione();
        return view('cotizacione.create', compact('cotizacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cotizacione::$rules);

        $cotizacione = Cotizacione::create($request->all());

        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotizacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizacione = Cotizacione::find($id);

        return view('cotizacione.show', compact('cotizacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacione = Cotizacione::find($id);

        return view('cotizacione.edit', compact('cotizacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cotizacione $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacione $cotizacione)
    {
        request()->validate(Cotizacione::$rules);

        $cotizacione->update($request->all());

        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotizacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cotizacione = Cotizacione::find($id)->delete();

        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotizacione deleted successfully');
    }
}
