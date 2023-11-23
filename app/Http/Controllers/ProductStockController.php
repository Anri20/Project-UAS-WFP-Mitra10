<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = DB::table('products')
        ->join('product_stocks','products.idproducts','product_stocks.product_id')
        ->join('shops','shops.idshops','product_stocks.shop_id')
        ->join('brands','brands.idbrands','products.brand_id')
        ->join('categories','categories.idcategories','products.category_id')
        ->get(
            array(
                'products.*',
                'product_stocks.stok',
                'shops.nama as nama_toko',
                'brands.nama as nama_brand',
                'categories.nama as nama_kategori',

            )
        );
        return view('productstock.index', compact('toko'));
    }

    public function index2()
    {
        $toko = DB::table('products')
        ->join('product_stocks','products.idproducts','product_stocks.product_id')
        // ->join('shops','shops.idshops','product_stocks.shop_id')
        // ->join('brands','brands.idbrands','products.brand_id')
        ->join('categories','categories.idcategories','products.category_id')
        ->get(
            array(
                'products.*',
                'product_stocks.stok',
                // 'shops.nama as nama_toko',
                // 'brands.nama as nama_brand',
                'categories.nama as nama_kategori',

            )
        );
        return view('productstock.index', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = DB::table('shops')->get();
        $product = DB::table('products')->get();

        return view('productstock.create', compact('shop','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('product_stocks')->insert(
            [
                'shop_id' => $request->toko,
                'product_id' => $request->product,
                'stok' => $request->stock
            ]
            );
        return redirect('/shop')->with('status', 'trueinsert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
