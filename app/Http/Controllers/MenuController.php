<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index (){

        $datos = Menu::all();
        return view('crudMenu.index' , compact('datos'));
    }

    public function show ($datos){

        $datos = Menu::find($datos);

        return view('crudMenu.show' , compact('datos'));
    }
    
    public function create (){

        return view('crudMenu.create');
    }

    public function store (Request $request){

        $newMenuDatos = new Menu();

        $newMenuDatos->nombre=$request->nombre;
        $newMenuDatos->ubicacion=$request->ubicacion;
        $newMenuDatos->descripcion=$request->descripcion;
        $newMenuDatos->save();

        return "datos enviados con exito";
        return view('crudMenu.create');


    }

    public function edit ($datos){

        $datos = Menu::find($datos);
        return view('crudMenu.edit', compact('datos'));
    }

    public function update (Request $request, $datos){


        $datos = Menu::find($datos);

        $datos->nombre=$request->nombre;
        $datos->ubicacion=$request->ubicacion;
        $datos->descripcion=$request->descripcion;
        $datos->direccion=$request->direccion;
        $datos->save();

        return redirect(route('crudMenu.show', $datos->id));
    }

    public function destroy ($datos){

        $datos = Menu::find($datos);
        $datos->delete();

        
    }
}
