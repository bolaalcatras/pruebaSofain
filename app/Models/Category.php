<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function dishes (){
        return $this->hasMany('App\Models\Dish');
    }
    public function menu (){
        return $this->belongsTo('App\Models\Menu');
    }
}
