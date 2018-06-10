<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////mostrar los registros
$pedidos = DB::table ('pedidos')
->join('clientes','pedidos.idCliente','=','clientes.id')
->select('pedidos.*','clientes.id as cddesc')
->get();
return  view('pedidos.index',['pedidos'=>$pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mandar datos
        $clientes = Cliente::pluck('id');
        return view('pedidos.create',['clientes' => $clientes]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar datos
        $data= $request->all();
        Pedido::create($data);
        return redirect('pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedidos  $pedidos
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
     * @param  \App\Pedido $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //Editar datos
        $pedido=Pedido::find ($pedido->id);
        $clientes = Cliente::pluck('id');
        return view('pedidos.edit',['pedido'=> $pedido,'clientes'=>$clientes]); 

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //Editar pedido
        $vpedido = Pedido::find($pedido->id);
        $data=$request->all();
        $vpedido->update($data);
        return redirect('pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
        $vpedido = Pedido::find($pedido->id);
        $pedido->destroy($pedido->id);
        return redirect('pedidos');
    }
}
