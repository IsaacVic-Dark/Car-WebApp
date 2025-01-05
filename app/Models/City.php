<?php

namespace App\Models;

use App\Models\Car;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public $timestamps = "false";

    protected $fillable = [
        'name','state_id'
    ] ;

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
