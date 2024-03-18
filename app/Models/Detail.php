<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'latest_payment',
        'payment_status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
