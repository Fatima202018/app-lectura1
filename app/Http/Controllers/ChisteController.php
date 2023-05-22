<?php

namespace App\Http\Controllers;

use App\Models\Chiste;
use Illuminate\Http\Request;

/**
 * Class ChisteController
 * @package App\Http\Controllers
 */
class ChisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chistes = Chiste::paginate();

        return view('chiste.index', compact('chistes'))
            ->with('i', (request()->input('page', 1) - 1) * $chistes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chiste = new Chiste();
        return view('chiste.create', compact('chiste'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chiste::$rules);

        $chiste = Chiste::create($request->all());

        return redirect()->route('chistes.index')
            ->with('success', 'Chiste created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chiste = Chiste::find($id);

        return view('chiste.show', compact('chiste'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chiste = Chiste::find($id);

        return view('chiste.edit', compact('chiste'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chiste $chiste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chiste $chiste)
    {
        request()->validate(Chiste::$rules);

        $chiste->update($request->all());

        return redirect()->route('chistes.index')
            ->with('success', 'Chiste updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chiste = Chiste::find($id)->delete();

        return redirect()->route('chistes.index')
            ->with('success', 'Chiste deleted successfully');
    }
}
