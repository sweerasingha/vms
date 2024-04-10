<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleRequestItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vehicle_request_id',
        'vehicle_id',
        'quantity',
        'status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
