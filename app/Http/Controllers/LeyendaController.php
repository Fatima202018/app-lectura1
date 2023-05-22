<?php

namespace App\Http\Controllers;

use App\Models\Leyenda;
use Illuminate\Http\Request;

/**
 * Class LeyendaController
 * @package App\Http\Controllers
 */
class LeyendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leyendas = Leyenda::paginate();

        return view('leyenda.index', compact('leyendas'))
            ->with('i', (request()->input('page', 1) - 1) * $leyendas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leyenda = new Leyenda();
        return view('leyenda.create', compact('leyenda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Leyenda::$rules);

        $leyenda = Leyenda::create($request->all());

        return redirect()->route('leyendas.index')
            ->with('success', 'Leyenda created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leyenda = Leyenda::find($id);

        return view('leyenda.show', compact('leyenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leyenda = Leyenda::find($id);

        return view('leyenda.edit', compact('leyenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Leyenda $leyenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leyenda $leyenda)
    {
        request()->validate(Leyenda::$rules);

        $leyenda->update($request->all());

        return redirect()->route('leyendas.index')
            ->with('success', 'Leyenda updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $leyenda = Leyenda::find($id)->delete();

        return redirect()->route('leyendas.index')
            ->with('success', 'Leyenda deleted successfully');
    }
}
