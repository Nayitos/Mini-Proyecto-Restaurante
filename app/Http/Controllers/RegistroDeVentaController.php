<?php

namespace App\Http\Controllers;

use App\Product;
use App\Venta;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class RegistroDeVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registrodeventas = DB::table ('registrodeventas')
        ->join('products','registrodeventas.idProducts','=','products.id')
        ->join('ventas','registrodeventas.idVentas','=','ventas.id')
        
        ->select('products.*','registrodeventas.idProducts as cdpro')
        ->select('ventas.*','registrodeventas.idVentas as cdvent')
       
        ->get();
        return  view('registrodeventas.index',['registrodeventas'=>$registrodeventas]);


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
