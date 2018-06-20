<?php

namespace App\Http\Controllers;

use App\Product;
use App\Venta;
use App\RegistroDeVentas;
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
        $registro_de_ventas = DB::table ('registro_de_ventas')
        ->join('products','registro_de_ventas.idProducts','=','products.id')
        ->join('ventas','registro_de_ventas.idVentas','=','ventas.id')
        ->join('pedidos','pedidos.id','=','ventas.idPedido')
        ->join('clientes','clientes.id','=','pedidos.idCliente')
        ->select('registro_de_ventas.id as id','products.name','registro_de_ventas.idProducts as cdpro','pedidos.nombrepedido','pedidos.precio','clientes.nombre as clientenombre','ventas.id','registro_de_ventas.idVentas as cdvent')->get();
        //return $registro_de_ventas;
        return  view('registrodeventas/index',['registrodeventas'=>$registro_de_ventas]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registro_de_ventas = DB::table ('registro_de_ventas')
        ->join('ventas','registro_de_ventas.idVentas','=','ventas.id')
        ->join('pedidos','pedidos.id','=','ventas.idPedido')
        ->join('clientes','clientes.id','=','pedidos.idCliente')
        ->select('ventas.id','pedidos.nombrepedido')->get()->pluck('id','nombrepedido');
       $producto = Product::pluck('name','id');

      return view('registrodeventas/create',['registrodeventas'=>$registro_de_ventas ,'producto' => $producto ]);

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
        RegistroDeVentas::create($data);
        return redirect('registrodeventas');
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroDeVentas  $RegistroDeVentas
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroDeVentas $RegistroDeVentas)
    {
        //
        return "show";

    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroDeVentas  $RegistroDeVentas
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroDeVentas  $RegistroDeVentas)
    {
        //
        $RegistroDeVentas= RegistroDeVentas::find ($RegistroDeVentas->id);
        $venta = Venta::pluck('idVentas');
        $producto = Product::pluck('idProducts');

        return view('registrodeventas.edit',['venta'=> $venta,'producto'=>$producto]); 
     


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroDeVentas  $RegistroDeVentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    
        $vregistrodeventas = RegistroDeVentas::find($registrodeventas->id);
        $data=$request->all();
        $vregistrodeventas->update($data);
        return redirect('registrodeventas');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\RegistroDeVentas  $RegistroDeVentas
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroDeVentas  $RegistroDeVentas)
    {
        //
        $vRegistroDeVenta = RegistroDeVentas::find($RegistroDeVenta->id);
        $RegistroDeVenta->destroy($RegistroDeVenta->id);
        return redirect('RegistroDeVentas');

    }
}
