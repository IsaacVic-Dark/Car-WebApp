<?php

namespace App\Models;

use App\Models\Maker;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    //
    public $timestamps = "false";

    protected $fillable = [
        'maker_id',
        'name'
    ] ;

    public function maker(){
        return $this->belongsTo(Maker::class);
    }
    public function cars(){
        return $this->hasMany(Car::class);
    }

}
