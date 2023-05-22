<?php

namespace App\Http\Controllers;

use App\Models\Fabula;
use Illuminate\Http\Request;

/**
 * Class FabulaController
 * @package App\Http\Controllers
 */
class FabulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabulas = Fabula::paginate();

        return view('fabula.index', compact('fabulas'))
            ->with('i', (request()->input('page', 1) - 1) * $fabulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabula = new Fabula();
        return view('fabula.create', compact('fabula'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fabula::$rules);

        $fabula = Fabula::create($request->all());

        return redirect()->route('fabulas.index')
            ->with('success', 'Fabula created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fabula = Fabula::find($id);

        return view('fabula.show', compact('fabula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabula = Fabula::find($id);

        return view('fabula.edit', compact('fabula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fabula $fabula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fabula $fabula)
    {
        request()->validate(Fabula::$rules);

        $fabula->update($request->all());

        return redirect()->route('fabulas.index')
            ->with('success', 'Fabula updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fabula = Fabula::find($id)->delete();

        return redirect()->route('fabulas.index')
            ->with('success', 'Fabula deleted successfully');
    }
}
