<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::all();
        // dd($products);

        return view('Home.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_name = $request->get('product_name');
        $product_desc = $request->get('product_description');
        $category_id = $request->get('category_id');
        $brand_id = $request->get('brand_id');
        $product_price = $request->get('product_price');

        DB::table('products')->insert([
            'nama' => $product_name,
            'deskripsi' => $product_desc,
            'category_id' => $category_id,
            'brand_id' => $brand_id,
            'harga' => $product_price,
        ]);

        return response()->json(['msg' => 'Data has been added Successfully!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        // dd($product);

        return view('Home.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function createProductPage()
    {
        $categories = DB::table('categories as c')
            ->whereNotNull('parent_category_id')
            ->get();

        $brands = DB::table('brands as b')
            ->get();

        return view("Product.create", compact('categories', 'brands'));
    }
}
