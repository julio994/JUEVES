<?php

namespace App\Http\Controllers;

use App\Adicional;
use Illuminate\Http\Request;

/**
 * Class AdicionalController
 * @package App\Http\Controllers
 */
class AdicionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adicionals = Adicional::paginate();

        return view('adicional.index', compact('adicionals'))
            ->with('i', (request()->input('page', 1) - 1) * $adicionals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adicional = new Adicional();
        return view('adicional.create', compact('adicional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Adicional::$rules);

        $adicional = Adicional::create($request->all());

        return redirect()->route('adicionals.index')
            ->with('success', 'Adicional created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adicional = Adicional::find($id);

        return view('adicional.show', compact('adicional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adicional = Adicional::find($id);

        return view('adicional.edit', compact('adicional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Adicional $adicional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adicional $adicional)
    {
        request()->validate(Adicional::$rules);

        $adicional->update($request->all());

        return redirect()->route('adicionals.index')
            ->with('success', 'Adicional updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $adicional = Adicional::find($id)->delete();

        return redirect()->route('adicionals.index')
            ->with('success', 'Adicional deleted successfully');
    }
}
