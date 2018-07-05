<?php

namespace App\Http\Controllers;

use App\libro;
use App\autor;
use App\editorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class libroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $libros = DB::table('libros')
        ->join('autors as a1', 'a1.id', '=', 'libros.idAutorPrimario')
        ->join('autors as a2', 'a2.id', '=', 'libros.idAutorSecundario')
        ->join('editorials', 'libros.idEditorial', '=', 'editorials.id')
        ->select('libros.*', 'a1.nombre as idAutorPrimario', 'a2.nombre as idAutorSecundario', 'editorials.nombre as idEditorial')
        ->get();

        return view('libros.index',['libros' => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = autor::pluck('nombre','id');
        $autores = autor::pluck('nombre','id');
        $editoriales = editorial::pluck('nombre','id');
        return view('libros.create',['autores' => $autores,'editoriales' => $editoriales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        libro::create($data);   
         return redirect('libros'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {

        $libro = libro::find($book->id);
        $autor= autor::pluck('apellidoPaterno','nombre', 'id', 'apellidoPaterno','nombre', 'id');
        $editorial = editorial::pluck('nombre', 'id', 'nombre', 'id'); 
        return view('libros.show', ['libro' => $libro, 'autor' => $autor, 'editorial'=>$editorial]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(libro $libro)
    {
        $libro = libro::find($libro->id);
        $autor = autor::pluck('nombre', 'id');
        $editorial = editorial::pluck('nombre', 'id'); 
        return view('libros.edit', ['libro' => $libro, 'autor' => $autor, 'editorial'=>$editorial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $vlibro = libro::find($id);
        $data = $request->all();
        $vlibro->update($data);    

        return redirect('libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vlibro = libro::find($id);
        $vlibro->destroy($id);
        return redirect('libros');
    }
}
