<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customers')
                ->get();
        return view('membership.index', compact('customer'));
    }

    public function detailbelaja($id){
        $detail = DB::table('customers')
        ->join("transactions","transactions.customer_id","customers.idcustomers")
        ->where("customers.idcustomers",$id)
        ->get(array(
            "transactions.*",
        ));
        return view('membership.show', compact('detail'));
    }

    public function detailitem($id){
        $detail = DB::table('transactions')
        ->join("transaction_items","transactions.idtransactions","transaction_items.transaction_id")
        ->join("products","products.idproducts","transaction_items.product_id")
        ->where("transactions.idtransactions",$id)
        ->get(array(
            "products.nama",
            "transaction_items.jumlah",
            "transaction_items.total",
        ));
        return view('membership.item', compact('detail'));
    }

}
