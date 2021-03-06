<?php

namespace App\Http\Controllers;

use App\autor;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class autorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autores = DB::table ('autors')->paginate(4);
        return  view('autores.index',['autores'=>$autores]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('autores.create');

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
        autor::create($data);   
        return redirect('autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show($autor)
    {
        //
        $autor=autor::find($autor);
        //$description=Product::find($description->id);
        return view('autores.show',['autor'=>$autor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vautor = autor::find($id);
        return view('autores.edit', ['autor' => $vautor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $vautor = autor::find($id);
        //data tiene todos losd atos
        $data = $request->all();
        $vautor->update($data);

        return redirect('autores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vautor = autor::find($id);
        $vautor->destroy($id);
        return redirect('autores');
    }

    public function prueba2(Request $request, autor $autor){
        $query = $request -> Query;
        //PETICIÓN Query
    
    $consulta = autor::select('*')
    ->where('nombre', 'like', '%'.$query.'%')
    ->get();
    
    $tablaContenido = '';
    foreach ($consulta as $row) {
                    $tablaContenido.='<tr>
                   <td>'.$row->id.'</td> 
                    <td>'.$row->nombre.'</td>
                    <td>'.$row->apellidoPaterno.'</td>
                    <td>'.$row->apellidoMaterno.'</td>
                    
    </tr>';   
    };
    
    
    $resultado = array(
     'valor' => $tablaContenido,
            );
    //ahora se transforma en un json
            echo json_encode($resultado);
        
    
    }



}
