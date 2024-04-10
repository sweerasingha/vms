<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerContactBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'name',
        'designation',
        'email',
        'mobile_no',
        'land_no',
    ];

      /**
     * getAllContacts
     *
     * @param  int $vendor_id
     * @return void
     */
    public function getAllContacts($customer_id)
    {
        return $this->where('customer_id', $customer_id)->get();
    }
}
