<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $consultas = Consulta::where([
                ['nome_consulta', 'like', '%' .$search.'%']
            ])->get();

        } else{
            $consultas = Consulta::all();
        }
       
      
          return view('welcome',[ 'consultas' => $consultas, 'search' => $search]);
      }
  
      public function create(){
          return view('events.create');
      }
  

      

      public function store(Request $request){
          $consultas = new Consulta;
          $event = new Consulta;
           
          $consultas ->nome_consulta = $request->nome_consulta;
          $consultas ->nome_especialista = $request->nome_especialista;
          $consultas ->date = $request->date;
          $consultas ->private = $request->private;
          $consultas ->description = $request->description;
          $consultas ->items = $request->items;

            $consultas->save();
            

            return redirect('/') ->with('msg', 'Consulta Criada com Sucesso!');
      }


      public function show($id) {
            $event =  Consulta::findOrFail($id);

            return view('events.show', ['event' => $event]);
      }
}
