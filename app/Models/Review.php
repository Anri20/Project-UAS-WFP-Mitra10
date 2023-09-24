<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'idreviews';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'idtransactions');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'idproducts');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'idcustomers');
    }
}
