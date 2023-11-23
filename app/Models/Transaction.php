<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'idtransactions';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'idcustomers');
    }

    public function items()
    {
        return $this->hasMany(TransactionItem::class, 'transaction_id', 'idtransactions');
    }

    public function review(){
        return $this->hasMany(Review::class, 'transaction_id', 'idtransactions');
    }

    public function transaction(){
        return $this->hasMany('app/transaction','shop_id','id');
    }
}
