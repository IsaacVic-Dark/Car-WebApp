<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    public $timestamps = "false";

    //
    protected $fillable = [
        'name'
    ] ;

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
