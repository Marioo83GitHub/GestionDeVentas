<?php

namespace App\Http\Controllers;

use App\Models\Despido;
use Illuminate\Http\Request;

/**
 * Class DespidoController
 * @package App\Http\Controllers
 */
class DespidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despidos = Despido::paginate();

        return view('despido.index', compact('despidos'))
            ->with('i', (request()->input('page', 1) - 1) * $despidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $despido = new Despido();
        return view('despido.create', compact('despido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Despido::$rules);

        $despido = Despido::create($request->all());

        return redirect()->route('despidos.index')
            ->with('success', 'Despido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $despido = Despido::find($id);

        return view('despido.show', compact('despido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despido = Despido::find($id);

        return view('despido.edit', compact('despido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Despido $despido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despido $despido)
    {
        request()->validate(Despido::$rules);

        $despido->update($request->all());

        return redirect()->route('despidos.index')
            ->with('success', 'Despido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $despido = Despido::find($id)->delete();

        return redirect()->route('despidos.index')
            ->with('success', 'Despido deleted successfully');
    }
}
