<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    //
    public $timestamps = "false";

    protected $primaryKey = 'car_id';

    protected $fillable = [
        'car_id',
        	'abs',
        	'air_conditioning',
        	'power_windows',
        	'power_door_locks',
            	'cruise_control',
            	'bluetooth_connectivity',

        	'remote_start',
        	'heated_seats',
            	'climate_control',
            	'rear_parking_sensors',
            	'leather_seats',
    ] ;

	public function car(){
		return $this->belongsTo(Car::class);
	}
}
