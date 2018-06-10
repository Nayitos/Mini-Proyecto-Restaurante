<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar los registros
        //$products= Product::all();
        $products = DB::table ('products')
        ->join('categories','products.category_id','=','categories.id')
        ->select('products.*','categories.description as cddesc')
        ->get();
        return  view('products.index',['products'=>$products]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $categories = Category::pluck('description','id');
        return view('products.create',['categories' => $categories]);
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
        Product::create($data);
        return redirect('products');
  


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //

        $product=Product::find ($product->id);
        $categories = Category::pluck('description','id');
        return view('products.edit',['product'=> $product,'categories'=>$categories]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //

        $vproduct = Product::find($product->id);
        $data=$request->all();
        $vproduct->update($data);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $vproduct = Product::find($product->id);
        $product->destroy($product->id);
        return redirect('products');
    }
}
