<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professionals;

class ControladorProfessionals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionals = Professionals::all();
        return view('professionals/index', compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professionals/crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouProfessional = $request->validate([
                'nif' => 'required|max:255',
                'nom' => 'required|max:255',
                'cognom' => 'required|max:255',
                'adreca' => 'required|max:255',
                'poblacio' => 'required|max:255',
                'comarca' => 'required|max:255',
                'fixe' => 'required|max:255',
                'mobil' => 'required|max:255',
                'email' => 'required|max:255',
                'carrec' => 'required|max:255',
                'pagament' => 'required|max:255',
                'IRPF' => 'required|max:255',
                'nomOng' => 'required|max:255',
        ]);
        $professionals = Professionals::create($nouProfessional);
    
        return redirect('/professionals')->with('completed', 'Professional creat');
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
        $professionals = Professionals::findOrFail($id);
        return view('professionals/actualitzar', compact('professionals'));
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
                'carrec' => 'required|max:255',
                'pagament' => 'required|max:255',
                'IRPF' => 'required|max:255',
                'nomOng' => 'required|max:255',
        ]);

        Professionals::whereId($id)->update($dades);
        return redirect('/professionals')->with('completed', 'Professional actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professionals = professionals::findOrFail($id);
        $professionals->delete();

        return redirect('/professionals')->with('completed', 'professional esborrat');;
    }
}
