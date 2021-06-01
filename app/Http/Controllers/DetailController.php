<?php

namespace App\Http\Controllers;

use App\Models\DetailCar;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $detailcars = DetailCar::all();
    return response()->json($detailcars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailcars = new DetailCar();
        $detailcars->subtotal = $request->subtotal;
        $detailcars->date = $request->date;
        $detailcars->Cant = $request->Cant;
        $detailcars->id_car_of_buys = $request->id_car_of_buys;
        $detailcars->id_product = $request->id_product;
        $detailcars->save();

        return response()->json($detailcars, 201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
