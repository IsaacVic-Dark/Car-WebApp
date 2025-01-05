<?php

namespace App\Models;

use App\Models\Car;
use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    public $timestamps = "false";
    protected $fillable = [
        'name'
    ] ;
    public function cars(){
        return $this->hasMany(Car::class);
    }
    public function cities(){
        return $this->hasMany(City::class);
    }

}
