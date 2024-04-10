<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPartnerAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'type',
        'name',
        'address_line_1',
        'address_line_2',
        'contact_1',
        'contact_2',
        'fax',
        'web_site',
    ];

    public function getAllPartners($customer_id)
    {
        return $this->where('customer_id',$customer_id)->get();
    }
}
