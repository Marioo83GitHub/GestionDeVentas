<?php

namespace App\Http\Controllers;

use App\Models\MotivosDespido;
use Illuminate\Http\Request;

/**
 * Class MotivosDespidoController
 * @package App\Http\Controllers
 */
class MotivosDespidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivosDespidos = MotivosDespido::paginate();

        return view('motivos-despido.index', compact('motivosDespidos'))
            ->with('i', (request()->input('page', 1) - 1) * $motivosDespidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motivosDespido = new MotivosDespido();
        return view('motivos-despido.create', compact('motivosDespido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MotivosDespido::$rules);

        $motivosDespido = MotivosDespido::create($request->all());

        return redirect()->route('motivos-despidos.index')
            ->with('success', 'MotivosDespido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motivosDespido = MotivosDespido::find($id);

        return view('motivos-despido.show', compact('motivosDespido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motivosDespido = MotivosDespido::find($id);

        return view('motivos-despido.edit', compact('motivosDespido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MotivosDespido $motivosDespido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MotivosDespido $motivosDespido)
    {
        request()->validate(MotivosDespido::$rules);

        $motivosDespido->update($request->all());

        return redirect()->route('motivos-despidos.index')
            ->with('success', 'MotivosDespido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $motivosDespido = MotivosDespido::find($id)->delete();

        return redirect()->route('motivos-despidos.index')
            ->with('success', 'MotivosDespido deleted successfully');
    }
}
