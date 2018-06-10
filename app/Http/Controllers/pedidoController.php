<?php

namespace App\Http\Controllers;

use App\pedido;
use App\Cliente;

use Illuminate\support\Facades\DB;

use Illuminate\Http\Request;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = DB::table ('Pedidos')
       ->join('clientes','Pedidos.idCliente','=','clientes.id')
         ->select('Pedidos.*','clientes.id as cddesc')
            ->get();
               
               return view('Pedidos.index',['Pedidos'=>$pedidos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = Cliente::pluck('id');//borrar esta linea
        return view('Pedidos.create',['clientes' => $clientes]);//borrar esta linea
        //return view('Pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        pedido::create($data);
        return redirect('Pedidos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        //
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedidos)
    {
        //
        $pedidos=pedido::find ($pedidos->id);
        $clientes = Cliente::pluck('id');//borrar esta linea
        return view('Pedidos.edit',['Pedido'=> $pedidos,$clientes,'clientes']);//borrar depues de $pedidos
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedidos)
    {
        //
        $vpedido = pedido::find($pedidos->id);
        $data=$request->all();
        $vpedido->update($data);
        return redirect('Pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedidos)
    {
        //
        $vpedido = pedido::find($pedidos->id);
        $pedidos->destroy($pedidos->id);
        return redirect('Pedidos');




    }
}
