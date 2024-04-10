<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFinanceRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'payee_account_code',
        'gl_code',
        'tax_no',
        'vat_no',
        'incoterms',
        'credit_days',
        'payment_terms',
    ];

       /**
     * getAllFinance
     *
     * @param  int $vendor_id
     * @return void
     */
    public function getAllFinance($customer_id)
    {
        return $this->where('customer_id', $customer_id)->get();
    }

    /**
     * getByFinanceId
     *
     * @param  int $vendor_id
     * @return void
     */
    public function getByFinanceId($customer_id)
    {
        return $this->where('customer_id', $customer_id)->first();
    }
}

