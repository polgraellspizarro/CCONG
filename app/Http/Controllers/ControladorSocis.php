<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socis;

class ControladorSocis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socis = Socis::all();
        return view('socis/index', compact('socis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socis/crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouSoci = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognom' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'fixe' => 'required|max:255',
            'mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'mesQuot' => 'required|max:255',
            'nomOng' => 'required|max:255',
        ]);

        $socis = Socis::create($nouSoci);

        return redirect('/socis')->with('completed', 'Soci creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socis = Socis::findOrFail($id);
        return view('socis/actualitzar', compact('socis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dades = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognom' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'fixe' => 'required|max:255',
            'mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'mesQuot' => 'required|max:255',
            'nomOng' => 'required|max:255',
        ]);
        Socis::whereId($id)->update($dades);
        return redirect('/socis')->with('completed', 'Soci actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socis = Socis::findOrFail($id);
        $socis->delete();

        return redirect('/socis')->with('completed', 'Soci Esborrat');
    }
}
