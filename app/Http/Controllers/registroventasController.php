<?php

namespace App\Http\Controllers;

use App\registroventas;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Venta;

class registroventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas = DB::table ('registro_ventas')
        ->join('products','products.category_id','=','categories.id')
        ->select('products.*','categories.description as cddesc')
        ->paginate(3);
        return  view('products.index',['products'=>$products]);

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
     * @param  \App\registroventas  $registroventas
     * @return \Illuminate\Http\Response
     */
    public function show(registroventas $registroventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registroventas  $registroventas
     * @return \Illuminate\Http\Response
     */
    public function edit(registroventas $registroventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registroventas  $registroventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroventas $registroventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registroventas  $registroventas
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroventas $registroventas)
    {
        //
    }
}
