<?php

namespace App\Http\Controllers;

use App\Coctel;
use Illuminate\Http\Request;

/**
 * Class CoctelController
 * @package App\Http\Controllers
 */
class CoctelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coctels = Coctel::paginate();

        return view('coctel.index', compact('coctels'))
            ->with('i', (request()->input('page', 1) - 1) * $coctels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coctel = new Coctel();
        return view('coctel.create', compact('coctel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coctel::$rules);

        $coctel = Coctel::create($request->all());

        return redirect()->route('coctels.index')
            ->with('success', 'Coctel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coctel = Coctel::find($id);

        return view('coctel.show', compact('coctel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coctel = Coctel::find($id);

        return view('coctel.edit', compact('coctel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Coctel $coctel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coctel $coctel)
    {
        request()->validate(Coctel::$rules);

        $coctel->update($request->all());

        return redirect()->route('coctels.index')
            ->with('success', 'Coctel updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $coctel = Coctel::find($id)->delete();

        return redirect()->route('coctels.index')
            ->with('success', 'Coctel deleted successfully');
    }
}
