<?php

namespace App\Http\Controllers;

use App\editorial;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class editorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = DB::table ('editorials')->paginate(4);
        return  view('editoriales.index',['editoriales'=>$editoriales]);
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
    public function show($editorial)
    {
        //
        $editorial=editorial::find($editorial);
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

    //Ajax
    public function prueba3(Request $request, editorial $editorial){
        $query = $request -> Query;
        //PETICIÓN Query
    
    $consulta = editorial::select('*')
    ->where('nombre', 'like', '%'.$query.'%')
    ->get();
    
    
    $tablaContenido = '';
    foreach ($consulta as $row) {
                    $tablaContenido.= '<tr>
                   <td>'.$row->id.'</td> 
                    <td>'.$row->nombre.'</td>
                    <td>'.$row->direccion.'</td>
                    <td>'.$row->telefono.'</td>
    
                    </tr>';   
    };
    
    $resultado = array(
     'valor' => $tablaContenido,
            );
    //ahora se transforma en un json
            echo json_encode($resultado);
        }
}
