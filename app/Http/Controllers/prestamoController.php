<?php

namespace App\Http\Controllers;

use App\prestamo;
use App\libro;
use App\alumno;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $prestamos = DB::table('prestamos')
    ->join('libros', 'prestamos.idLibro', '=', 'libros.id')
    ->join('alumnos', 'prestamos.idAlumno', '=', 'alumnos.id')
    ->join('users', 'prestamos.idUser', '=', 'users.id')
    ->select('prestamos.*', 'libros.titulo as idLibro', 'alumnos.noControl as idAlumno', 'users.id as idUser')
    ->paginate(4);
        
    return view('prestamos.index',['prestamos' => $prestamos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libros = libro::pluck('titulo','id');
        $alumnos = alumno::pluck('nombre','id');
        $users = User::pluck('id','id');
        return view('prestamos.create',['libros' => $libros,'alumnos' => $alumnos, 'users' => $users]);
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
        
        prestamo::create($data);   
         return redirect('prestamos'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show( $prestamo)
    {
        $prestamo = prestamo::find($prestamo);
        return view('prestamos.show',['prestamo'=>$prestamo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamo $prestamo)
    {
        $prestamo = prestamo::find($prestamo->id);
        $libro = libro::pluck('titulo', 'id');
        $alumno = alumno::pluck('nombre', 'id'); 
        $user = User::pluck('id', 'id');
        return view('prestamos.edit', ['prestamo' => $prestamo, 'libro' => $libro, 'alumno' => $alumno, 'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $vprestamo = prestamo::find($id);
        $data = $request->all();
        $vprestamo->update($data);    

        return redirect('prestamos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vprestamo = prestamo::find($id);
        $vprestamo->destroy($id);
        return redirect('prestamos');
    }
}
