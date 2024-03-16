<?php

namespace App\Models;

use App\Models\CustomerPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'client_id',
        'package',
        'name',
        'email',
        'contact',
        'bussiness_name',
        'business_location',
        'user_status'
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
