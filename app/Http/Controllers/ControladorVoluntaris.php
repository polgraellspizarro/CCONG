<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voluntaris;

class ControladorVoluntaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntaris = Voluntaris::all();
        return view('voluntaris/index', compact('voluntaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntaris/crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouVoluntari = $request->validate([
                'nif' => 'required|max:255',
                'nom' => 'required|max:255',
                'cognom' => 'required|max:255',
                'adreca' => 'required|max:255',
                'poblacio' => 'required|max:255',
                'comarca' => 'required|max:255',
                'fixe' => 'required|max:255',
                'mobil' => 'required|max:255',
                'email' => 'required|max:255',
                'edad' => 'required|max:255',
                'professio' => 'required|max:255',
                'hDedicades' => 'required|max:255',
                'nomOng' => 'required|max:255',
        ]);
        $voluntaris = Voluntaris::create($nouVoluntari);
    
        return redirect('/voluntaris')->with('completed', 'Voluntari creat');
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
        $voluntaris = Voluntaris::findOrFail($id);
        return view('voluntaris/actualitzar', compact('voluntaris'));
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
                'edad' => 'required|max:255',
                'professio' => 'required|max:255',
                'hDedicades' => 'required|max:255',
                'nomOng' => 'required|max:255',
        ]);

        Voluntaris::whereId($id)->update($dades);
        return redirect('/voluntaris')->with('completed', 'Voluntari actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voluntaris = voluntaris::findOrFail($id);
        $voluntaris->delete();

        return redirect('/voluntaris')->with('completed', 'voluntari esborrat');;
    }
}
