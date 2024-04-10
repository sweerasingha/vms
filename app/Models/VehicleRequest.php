<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'transaction_type_id',
        'date',
        'remarks',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(VehicleRequestItem::class);
    }
}
