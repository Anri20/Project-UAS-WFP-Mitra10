<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $primaryKey = null;
    public $incrementing = false;

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'idtransactions');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'idproducts');
    }
}
