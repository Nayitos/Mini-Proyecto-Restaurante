<?php

namespace App\Http\Controllers;

use App\alumno;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = DB::table ('alumnos')->paginate(4);
        return  view('alumnos.index',['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
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
        alumno::create($data);

        return redirect('alumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(alumno $alumno)
    {
        $alumno = alumno::find($alumno-> id);
        return view('alumnos.show',['alumno'=>$alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valumno = alumno::find($id);
        return view('alumnos.edit', ['alumno' => $valumno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $valumno = alumno::find($id);
        $data = $request->all();
        $valumno->update($data);    

        return redirect('alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valumno = alumno::find($id);
        $valumno->destroy($id);
        return redirect('alumnos');
    }
}
