<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomeBankAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'bank_name',
        'bank_code',
        'branch_name',
        'branch_code',
        'swift_code',
        'account_no',
    ];

  /**
     * getAllBankAccounts
     *
     * @param  int $vendor_id
     * @return void
     */
    public function getAllBankAccounts($customer_id)
    {
        return $this->where('customer_id', $customer_id)->get();
    }
}
