<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'fleet_id',
        'route_id',
        'driver_id',
        'departure_time',
        'arrival_time',
        'status',
    ];

    public function fleet()
    {
        return $this->belongsTo(Fleet::class);
    }

    /**
     * Get the route for the trip.
     */
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    /**
     * Get the driver for the trip.
     */
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}