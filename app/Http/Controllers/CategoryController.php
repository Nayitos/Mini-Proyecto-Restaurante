<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar los registros
        $categories= Category::all();
        
        return  view('categories.index',['categories'=>$categories]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario para una nueva categoria
        return view('categories.create');
        

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
      Category::create($data);
      return redirect('categories');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //mostrar informacion especifica sobre una categoria
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //mostrar los datos en una vista que deseamos actualizar 
            $category=Category::find ($category->id);
           return view('categories.edit',['category'=> $category]); 

    }


    //Boton

        
        public function prueba(Request $request){

            $query = $request -> Query;

            /*
            $nombres = array('Adrian','Humberto','German','Daniel','Isaac');
            $edades = array(28,45,44,62,18);
            $nombre = $nombres[rand(0,4)];
            $edad = $edades[rand(0,4)];
    
            $resultado = array(
                'resultado' => "Tu nombre es ".$nombre.", tu edad es ".$edad,
            );
    
            echo json_encode($resultado); */
        }
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //realizar los cambios en la base de datos, basado en la actualizacion
        $vcategory = Category::find($category->id);
        $data=$request->all();
        $vcategory->update($data);
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //eliminar un registro 
        $vcategory = Category::find($category->id);
        $category->destroy($category->id);
        return redirect('categories');
    }
}
