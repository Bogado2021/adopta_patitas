<?php

namespace App\Http\Controllers;

use App\Adoptar;
use Illuminate\Http\Request;

class AdoptarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adoptar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adoptar  $adoptar
     * @return \Illuminate\Http\Response
     */
    public function show(Adoptar $adoptar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adoptar  $adoptar
     * @return \Illuminate\Http\Response
     */
    public function edit(Adoptar $adoptar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adoptar  $adoptar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adoptar $adoptar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adoptar  $adoptar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adoptar $adoptar)
    {
        //
    }
}
