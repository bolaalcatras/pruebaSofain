<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function dishes (){
        return $this->belongsToMany('App\Models\Dish');
    }
    public function users (){
        return $this->belongsToMany('App\Models\User');
    }
    public function tables (){
        return $this->belongsToMany('App\Models\Table');
    }
}
