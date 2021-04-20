<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuaris = Usuaris::all();
	return view('usuaris/index', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuaris/crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
		'username' => 'required|max:255',
		'password' => 'required|max:255',
		'nom' => 'required|max:255',
		'cognom' => 'required|max:255',
		'email' => 'required|max:255',
		'mobil' => 'required|max:255',
		'admin' => 'required|max:255',
	]);
	$usuaris = Usuaris::create($nouUsuari);

	return redirect('/usuaris')->with('completed', 'Usuari creat!');
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
        $usuaris = Usuaris::findOrFail($id);
	return view('usuaris/actualitzar', compact('usuaris'));
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
                'username' => 'required|max:255',
                'password' => 'required|max:255',
                'nom' => 'required|max:255',
                'cognom' => 'required|max:255',
                'email' => 'required|max:255',
                'mobil' => 'required|max:255',
                'admin' => 'required|max:255',
        ]);
        Usuaris::whereId($id)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuaris = usuaris::findOrFail($id);
        $usuaris->delete();

        return redirect('/usuaris')->with('completed', 'Usuari esborrat');
    }
}
