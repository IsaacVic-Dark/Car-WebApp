<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maker extends Model
{
    use HasFactory;
    //
    public $timestamps = "false";
    protected $fillable = [
        'name'
    ] ;

    public function cars(){
        return $this->hasMany(Car::class);
    }
    public function models(){
        return $this->hasMany(Model::class);
    }
}
