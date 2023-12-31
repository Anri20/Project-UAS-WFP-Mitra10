<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

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
        if (!Gate::allows('manage-product')) {
            abort(403);
        }

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

    public function indexAdmin()
    {
        if (!Gate::allows('manage-product')) {
            abort(403);
        }

        $product = Product::all();

        return view('Admin.Product.index', compact('product'));
    }

    public function getUpdate()
    {
        if (!Gate::allows('manage-product')) {
            abort(403);
        }

        $data = [];

        $categories = DB::table('categories as c')
            ->get();

        $brands = DB::table('brands as b')
            ->get();

        $data['categories'] = $categories;
        $data['brands'] = $brands;

        return response()->json(["data" => $data], 200);
    }

    public function createProductPage()
    {
        if (!Gate::allows('manage-product')) {
            abort(403);
        }

        $categories = DB::table('categories as c')
            ->whereNotNull('parent_category_id')
            ->get();

        $brands = DB::table('brands as b')
            ->get();

        return view("Admin.Product.create", compact('categories', 'brands'));
    }

    public function updateProduct(Request $request)
    {
        if (!Gate::allows('manage-product')) {
            abort(403);
        }

        $productName = $request->get('productName');
        $newProductName = $request->get('newProductName');
        $productDesc = $request->get('productDesc');
        $productCategory_id = $request->get('productCategory_id');
        $productBrand_id = $request->get('productBrand_id');
        $productPrice = $request->get('productPrice');

        DB::table('products')
            ->where('nama', $productName)
            ->update([
                'nama' => $newProductName,
                'deskripsi' => $productDesc,
                'category_id' => $productCategory_id,
                'brand_id' => $productBrand_id,
                'harga' => $productPrice,
            ]);

        return response()->json(["msg" => "Data has been updated successfully!!!"], 200);
    }

    public function deleteProduct(Request $request)
    {
        if (!Gate::allows('manage-product')) {
            abort(403);
        }

        $productName = $request->get('productName');

        Product::where('nama', $productName)->delete();

        return response()->json(["msg" => "Data has been deleted successfully!!!"], 200);
    }

    public function getProductCategory(Request $request)
    {
        $category = $request->get('category');
        $type = $request->get('type');
        $products = [];
        $productsSC = [];

        if ($type == 1) {
            $products = DB::table('products as p')
                ->join('categories as cc', 'p.category_id', 'cc.idcategories')
                ->join('categories as sc', 'cc.parent_category_id', 'sc.idcategories')
                ->where('sc.nama', $category)
                ->select('*', 'p.nama as namaProduct', 'cc.nama as namaKategori')
                ->get();

            $productsSC = DB::table('products as p')
                ->join('categories as sc', 'p.category_id', 'sc.idcategories')
                ->where('sc.nama', $category)
                ->select('*', 'p.nama as namaProduct', 'sc.nama as namaKategori')
                ->get();
        } else if ($type == 2) {
            $products = DB::table('products as p')
                ->join('categories as cc', 'p.category_id', 'cc.idcategories')
                ->where('cc.nama', $category)
                ->select('*', 'p.nama as namaProduct', 'cc.nama as namaKategori')
                ->get();
        }
        // dd($products);
        return response()->json(['products' => $products, 'productsSC' => $productsSC], 200);
    }

    public function getBrandCategory(Request $request)
    {
        $brand = $request->get('brand');
        $products = [];

        $products = DB::table('products as p')
            ->join('categories as cc', 'p.category_id', 'cc.idcategories')
            ->join('brands as b', 'p.brand_id', 'b.idbrands')
            ->where('b.nama', $brand)
            ->select('*', 'p.nama as namaProduct', 'b.nama as namaBrand', 'cc.nama as namaKategori')
            ->get();

        // dd($products);
        return response()->json(['products' => $products], 200);
    }
}
