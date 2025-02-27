<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primerControllador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('primer.Equipo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('primer.partidos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('primer.resultados ', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('primer.notificaciones ', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('primer.home ', ['id' => $id]);
    }
}
