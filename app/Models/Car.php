<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\CarImage;
use App\Models\FuelType;
use App\Models\CarFeatures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'id',
        'maker_id',
            'model_id',
            'year',
            'price',
            'vin',
                'mileage',
                'car_type_id',
                'fuel_type_id',
                'user_id',
                'city_id',
                'address',
                'phone',
                'description',
                'published_at',
                'created_at',
                'updated_at',
                'deleted_at',
    ];

    public function carType(){
        return $this->belongTo(CarType::class);
    }
    public function fuelType(){
        return $this->belongTo(FuelType::class);
    }
    public function maker(){
        return $this->belongTo(Maker::class);
    }
    public function model(){
        return $this->belongTo(Model::class);
    }
    public function owner(){
        return $this->belongTo(User::class, 'user_id');
    }
    public function city(){
        return $this->belongTo(City::class);
    }
    public function features(){
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage(){
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function images(){
        return $this->hasMany(CarImage::class);
    }
    public function favouredUsers(){
        return $this->belongsToMany(User::class, 'favourite_cars');
    }
}

