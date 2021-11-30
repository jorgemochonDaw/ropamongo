<?php

namespace App\Http\Controllers;

use App\Models\Llevar;
use Illuminate\Http\Request;

class LlevarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $llevar = Llevar::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.llevar.index', ['llevar' => $llevar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create()
    {
        Llevar::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Llevar  $llevar
     * @return \Illuminate\Http\Response
     */
    public function show(Llevar $llevar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Llevar  $llevar
     * @return \Illuminate\Http\Response
     */
    public function edit(Llevar $llevar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Llevar  $llevar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Llevar $llevar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Llevar  $llevar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Llevar $llevar)
    {
        //
    }
}
