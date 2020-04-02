<?php

namespace App\Http\Controllers;

use App\Componente;
use App\Modelo;
use Illuminate\Http\Request;

class ComponenteController extends Controller//Usaste Artisan para crear este controllador? ya ni recuerdo. creo que si, es que cree varios proyecto en un día 
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componente = Componente::all();
        return view('componentes.index',compact('componente'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'Laboratorio' => 'required',
            'Nombre' => 'required',
            'Marca' => 'required',
            'Modelo' => 'required',
            'Caracteristicas' => 'required',
            'Uso' => 'required',
            'Seguridad' => 'required',
            'Imagenes' => 'required',
            'Video' => 'required',
        ]);

        Componente::create($request->all());

        return redirect()->route('componentes.index')
                        ->with('success','Componente agregado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Componente $componente)
    {
        //return $componente;
        return view('componentes.show',compact('componente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Componente $componente)
    {
        return view('componentes.edit',compact('componente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Componente  $comp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Componente $componente)
    {
         request()->validate([
            'Laboratorio' => 'required',
            'Nombre' => 'required',
            'Marca' => 'required',
            'Modelo' => 'required',
            'Caracteristicas' => 'required',
            'Uso' => 'required',
            'Seguridad' => 'required',
            'Imagenes' => 'required',
            'Video' => 'required',
        ]);

        $componente->update($request->all());

        return redirect()->route('componentes.index')
                        ->with('success','Componente modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Componente $componente)
    {
        $componente->delete();

        return redirect()->route('componentes.index')
                        ->with('success','Componente eliminado satisfactoriamente');
    }
}