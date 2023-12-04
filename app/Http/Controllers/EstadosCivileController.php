<?php

namespace App\Http\Controllers;

use App\Models\EstadosCivile;
use Illuminate\Http\Request;

/**
 * Class EstadosCivileController
 * @package App\Http\Controllers
 */
class EstadosCivileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadosCiviles = EstadosCivile::paginate();

        return view('estados-civile.index', compact('estadosCiviles'))
            ->with('i', (request()->input('page', 1) - 1) * $estadosCiviles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadosCivile = new EstadosCivile();
        return view('estados-civile.create', compact('estadosCivile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstadosCivile::$rules);

        $estadosCivile = EstadosCivile::create($request->all());

        return redirect()->route('estados-civiles.index')
            ->with('success', 'EstadosCivile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadosCivile = EstadosCivile::find($id);

        return view('estados-civile.show', compact('estadosCivile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadosCivile = EstadosCivile::find($id);

        return view('estados-civile.edit', compact('estadosCivile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstadosCivile $estadosCivile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadosCivile $estadosCivile)
    {
        request()->validate(EstadosCivile::$rules);

        $estadosCivile->update($request->all());

        return redirect()->route('estados-civiles.index')
            ->with('success', 'EstadosCivile updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadosCivile = EstadosCivile::find($id)->delete();

        return redirect()->route('estados-civiles.index')
            ->with('success', 'EstadosCivile deleted successfully');
    }
}
