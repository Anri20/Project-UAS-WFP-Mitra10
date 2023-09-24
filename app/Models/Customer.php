<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'idcustomers';

    public function user()
    {
        return $this->hasOne(User::class, 'customer_id', 'idcustomers');
    }
}
