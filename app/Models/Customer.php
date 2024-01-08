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

    public function review()
    {
        return $this->hasMany(Review::class, 'customer_id', 'idcustomers');
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class, 'customer_id', 'idcustomers');
    }

    public function namaLengkap()
    {
        return $this->nama_depan . ' ' . $this->nama_belakang;
    }
}
