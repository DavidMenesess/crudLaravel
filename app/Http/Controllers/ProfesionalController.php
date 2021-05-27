<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $personas = Profesional::all();
        return view('profesional.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesionales = new Profesional();
        $profesionales->numdocumento = $request->get('numerodocumento'); 
        $profesionales->nombre = $request->get('nombre'); 
        $profesionales->apellido = $request->get('apellido'); 
        $profesionales->habilidades = $request->get('habilidades'); 
        $profesionales->salario = $request->get('salario'); 
        $profesionales->disponible = $request->get('disponible'); 

        $profesionales->save();
        return redirect('/profesional');

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
        $persona = Profesional::find($id);
        return view('profesional.edit')->with('persona',$persona);
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
        $profesional = Profesional::find($id);
        $profesional->numdocumento = $request->get('numerodocumento'); 
        $profesional->nombre = $request->get('nombre'); 
        $profesional->apellido = $request->get('apellido'); 
        $profesional->habilidades = $request->get('habilidades'); 
        $profesional->salario = $request->get('salario'); 
        $profesional->disponible = $request->get('disponible'); 

        $profesional->save();
        return redirect('/profesional');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesional = Profesional::find($id);
        $profesional->delete();
        return redirect('/profesional');
    }
}
