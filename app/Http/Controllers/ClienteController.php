<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar los registros
        $clientes= Cliente::all();
        
        return  view('clientes.index',['clientes'=>$clientes]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario para una nueva categoria
        return view('clientes.create');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar informacion

      $data= $request->all();
      Cliente::create($data);
      return redirect('clientes');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //mostrar informacion especifica sobre una categoria
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //mostrar los datos en una vista que deseamos actualizar 
            $cliente=Cliente::find ($cliente->id);
           return view('clientes.edit',['cliente'=> $cliente]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //realizar los cambios en la base de datos, basado en la actualizacion
        $vcliente = Cliente::find($cliente->id);
        $data=$request->all();
        $vcliente->update($data);
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //eliminar un registro 
        $vcliente= Cliente::find($cliente->id);
        $cliente->destroy($cliente->id);
        return redirect('clientes');
    }
    
}
