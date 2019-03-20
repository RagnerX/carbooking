<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    const VEHICLE_TYPE_CONTRACT = "CONTRACT";
    const VEHICLE_TYPE_OWNED = "OWNED";

    protected $fillable = [
        'type',
        'brand',
        'model',
        'mileage',
        'seat_capacity',
        'licence_start_date',
        'licence_expire_date',
        'driver_name',
        'driver_contact',
        'available',
    ];

}
