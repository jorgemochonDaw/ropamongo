<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCalzado;
use App\Models\Calzado;
use Illuminate\Http\Request;

class CalzadoControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calzados = Calzado::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.ropa.index', ['calzados' => $calzados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ropa.create', ['calzado' => new Calzado()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCalzado $request)
    {
        Calzado::create($request->validated()); //Para poner tus validaciones personalizadas
        return back()->with('status', 'Calzado creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function show(Calzado $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function edit(Calzado $calzado)
    {
        return view('dashboard.ropa.edit', ['calzado' => $calzado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCalzado $request, Calzado $calzado)
    {
        $calzado->update($request->validated());
        return back()->with('status', 'Calzado de la marca ' . $calzado->marca .  ' actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calzado $calzado)
    {
        $calzado->delete();
        return back()->with('status', "Libro eliminado correctamente");
    }
}
