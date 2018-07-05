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
       

        //mostrawr todas las  informacióncategorias
        //categories / index
         $categories = Category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mostrar el formulario para una nueva categoría
        
        return view ('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar la
        //var_dump($request);
        //todos los request de l formulario
        //ingresa los requestque creamos
        $data = $request->all();
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
        // toma la informacion epecifica sohbre una categoria
       // return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //muestra los datos de una vista que deseamos actualizar

//que esté llegando el id quer estamos necesitando
        //un modelo es el que tiene el contacto con la base de datos
        //este comando de abajo es como el select where 
        $category = Category::find($category->id);
        return view('categories/edit', ['category' => $category]);
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
        //realizar los cambios de la bd en la actualización
        //recordemos que $category son todos los datos
        //vcategory trae todos los datos del id de ese elemento
        $vcategory = Category::find($category->id);
        //data tiene todos losd atos
        $data = $request->all();
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
        //eliminar un registro de la base de datos
        $vcategory = Category::find($category->id);

        $vcategory->destroy($category->id);
        return redirect('categories');
    }

public function prueba(Request $request, Category $category){
    $query = $request -> Query;
    //PETICIÓN Query

$consulta = Category::select('description')
->where('description', 'like', '%'.$query.'%')
->get();


$tablaContenido = '';
foreach ($consulta as $row) {
                $tablaContenido.= '<tr>
                <td>'.$row->id.'</td> 
                <td>'.$row->description.'</td>
                </tr>';   
};

$resultado = array(
 'valor' => $tablaContenido,
        );
//ahora se transforma en un json
        echo json_encode($resultado);
    }


}