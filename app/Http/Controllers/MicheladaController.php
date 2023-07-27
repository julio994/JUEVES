<?php

namespace App\Http\Controllers;

use App\Michelada;
use Illuminate\Http\Request;

/**
 * Class MicheladaController
 * @package App\Http\Controllers
 */
class MicheladaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $micheladas = Michelada::paginate();

        return view('michelada.index', compact('micheladas'))
            ->with('i', (request()->input('page', 1) - 1) * $micheladas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $michelada = new Michelada();
        return view('michelada.create', compact('michelada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Michelada::$rules);

        $michelada = Michelada::create($request->all());

        return redirect()->route('micheladas.index')
            ->with('success', 'Michelada created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $michelada = Michelada::find($id);

        return view('michelada.show', compact('michelada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $michelada = Michelada::find($id);

        return view('michelada.edit', compact('michelada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Michelada $michelada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Michelada $michelada)
    {
        request()->validate(Michelada::$rules);

        $michelada->update($request->all());

        return redirect()->route('micheladas.index')
            ->with('success', 'Michelada updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $michelada = Michelada::find($id)->delete();

        return redirect()->route('micheladas.index')
            ->with('success', 'Michelada deleted successfully');
    }
}
