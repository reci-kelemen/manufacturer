<?php

namespace App\Http\Controllers\API;

use App\Models\Buvar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuvarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturer = Buvar::all();
        return response()->json($manufacturer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manufacturer = new Buvar();
        $manufacturer -> fill($request->all());
        $manufacturer->save();
        return response()->json($manufacturer, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturer = Buvar::find($id);
        if (is_null($manufacturer)){
            return response()->json("Ilyen azonosítóval nem található rekord.", "404");
        }
        return response()->json($manufacturer);
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
        $manufacturer = Buvar::find($id);
        if (is_null($manufacturer)){
            return response()->json("Ilyen azonosítóval nem található rekord.", "404");
        }
        $manufacturer->fill($request->all());
        $manufacturer->save();
        return response()->json($expense);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacturer = Buvar::find($id);
        if (is_null($manufacturer)){
            return response()->json("Ilyen azonosítóval nem található rekord.", "404");
        }
        Buvar::destroy($id);
        return response()->noContent();
    }
}
