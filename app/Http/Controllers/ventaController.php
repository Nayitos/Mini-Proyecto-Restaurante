<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$ventas = DB::table ('ventas')
        ->join('pedidos','ventas.idPedido','=','pedidos.id')
        ->select('ventas.created_at','pedidos.id as descped')
        ->get();*/
        $ventas = Venta::all();
        return  view('ventas.index',['ventas'=>$ventas]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pedidos = Pedido::pluck('nombrepedido','id');
        return view('ventas.create',['pedidos' => $pedidos]);


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
        $data= $request->all();
        Venta::create($data);
        
        return redirect('ventas');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
        $venta=Venta::find ($venta->id);
        $pedidos = Pedido::pluck('id');
        return view('ventas.edit',['venta'=> $venta,'pedidos'=>$pedidos]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
        
        $vventa = Venta::find($venta->id);
        $data=$request->all();
        $vventa->update($data);
        return redirect('ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
        $vventa = Venta::find($venta->id);
        $venta->destroy($venta->id);
        return redirect('ventas');
    }
}
