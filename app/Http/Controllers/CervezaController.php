<?php

namespace App\Http\Controllers;

use App\Cerveza;
use Illuminate\Http\Request;

/**
 * Class CervezaController
 * @package App\Http\Controllers
 */
class CervezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cervezas = Cerveza::paginate();

        return view('cerveza.index', compact('cervezas'))
            ->with('i', (request()->input('page', 1) - 1) * $cervezas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cerveza = new Cerveza();
        return view('cerveza.create', compact('cerveza'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cerveza::$rules);

        $cerveza = Cerveza::create($request->all());

        return redirect()->route('cervezas.index')
            ->with('success', 'Cerveza created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cerveza = Cerveza::find($id);

        return view('cerveza.show', compact('cerveza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cerveza = Cerveza::find($id);

        return view('cerveza.edit', compact('cerveza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cerveza $cerveza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cerveza $cerveza)
    {
        request()->validate(Cerveza::$rules);

        $cerveza->update($request->all());

        return redirect()->route('cervezas.index')
            ->with('success', 'Cerveza updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cerveza = Cerveza::find($id)->delete();

        return redirect()->route('cervezas.index')
            ->with('success', 'Cerveza deleted successfully');
    }
}
