<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ong;

class ControladorOng extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ong = on::all();
	return view('index', compact('empleat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novaOng = $request->validate([
		'cif' => 'required|max:255',
		'nom' => 'required|max:255',
		'adreca' => 'required|max:255',
		'poblacio' => 'required|max:255',
		'comarca' => 'required|max:255',
		'tipus' => 'required|max:255',
	]);
	$ong = ong::create($novaOng);

	return redirect ('/ong')->with('completed', 'Ong creada');
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
        $ong = ong::findOrFail($id);
	return view('actualitza', compact('ong'));
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
		'cif' =>'required|max:255',
		'nom' =>'required|max:255',
		'adreca' => 'required|max:255',
		'poblaco' => 'required|max:255',
		'comarca' => 'required|max:255',
		'tipus' => 'required|max:255',
	]);
	
	ong:whereId($id)->update($dades);
	return redirect('/ong')->with('compl', 'Ong creada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ong = ong::findOrFail($id);
	return view('index', completed('ong'));
    }
}
