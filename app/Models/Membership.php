<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $primaryKey = 'idmembership';

    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id', 'idcustomer');
    }
}
