<?php

namespace App\Http\Controllers;

use App\Models\DatosEmpresa;
use Illuminate\Http\Request;

/**
 * Class DatosEmpresaController
 * @package App\Http\Controllers
 */
class DatosEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosEmpresas = DatosEmpresa::paginate();

        return view('datos-empresa.index', compact('datosEmpresas'))
            ->with('i', (request()->input('page', 1) - 1) * $datosEmpresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosEmpresa = new DatosEmpresa();
        return view('datos-empresa.create', compact('datosEmpresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DatosEmpresa::$rules);

        $datosEmpresa = DatosEmpresa::create($request->all());

        return redirect()->route('datos-empresas.index')
            ->with('success', 'DatosEmpresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datosEmpresa = DatosEmpresa::find($id);

        return view('datos-empresa.show', compact('datosEmpresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosEmpresa = DatosEmpresa::find($id);

        return view('datos-empresa.edit', compact('datosEmpresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DatosEmpresa $datosEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosEmpresa $datosEmpresa)
    {
        request()->validate(DatosEmpresa::$rules);

        $datosEmpresa->update($request->all());

        return redirect()->route('datos-empresas.index')
            ->with('success', 'DatosEmpresa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $datosEmpresa = DatosEmpresa::find($id)->delete();

        return redirect()->route('datos-empresas.index')
            ->with('success', 'DatosEmpresa deleted successfully');
    }
}
