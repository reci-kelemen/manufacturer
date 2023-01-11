<?php

namespace App\Http\Controllers;

use App\Models\Buvar;
use App\Http\Requests\StoreBuvarRequest;
use App\Http\Requests\UpdateBuvarRequest;

class BuvarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBuvarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuvarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buvar  $buvar
     * @return \Illuminate\Http\Response
     */
    public function show(Buvar $buvar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buvar  $buvar
     * @return \Illuminate\Http\Response
     */
    public function edit(Buvar $buvar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuvarRequest  $request
     * @param  \App\Models\Buvar  $buvar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuvarRequest $request, Buvar $buvar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buvar  $buvar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buvar $buvar)
    {
        //
    }
}
