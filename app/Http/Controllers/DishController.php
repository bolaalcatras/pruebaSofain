<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function show ($datosDish){

        $datosDish = Dish::find($datosDish);
        return view('crudPlatos.show' , compact('datosDish'));
    }
}
