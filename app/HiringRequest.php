<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HiringRequest extends Model
{
    const STARTED = "STARTED";
    const ENDED = "ENDED";

    protected $fillable = [
        'user_id', 'vehicle_id', 'admin_approved', 'status'
    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

}
