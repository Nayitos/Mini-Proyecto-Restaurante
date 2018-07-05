<?php

namespace App\Http\Controllers;

use App\editorial;
use Illuminate\Http\Request;

class editorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = editorial::all();

        return view('editoriales.index', ['editoriales' => $editoriales]);
   }
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
              
        return view ('editoriales.create');

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
        $data = $request->all();
        editorial::create($data);   
        return redirect('editoriales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(editorial $editorial)
    {
        //
        $editorial=editorial::find($editorial->id);
        //$description=Product::find($description->id);
        return view('editoriales.show',['editorial'=>$editorial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $veditorial = editorial::find($id);
        return view('editoriales.edit', ['editorial' => $veditorial]);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $veditorial = editorial::find($id);
        //data tiene todos losd atos
        $data = $request->all();
        $veditorial->update($data);

        return redirect('editoriales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $veditorial = editorial::find($id);
        $veditorial->destroy($id);
        return redirect('editoriales');
    }
}