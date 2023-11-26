<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = [];
        foreach (range('A', 'Z') as $char) {
            $alphaBrand = Brand::where('nama', 'like', $char . '%')->orderBy('nama', 'asc')->get();
            $brands[$char] = $alphaBrand;
        }
        // dd($brands);
        // var_dump($brands);

        return view('ShopByBrand.index', compact('brands'));
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
        $brand_name = $request->get('brand_name');

        DB::table('brands')->insert([
            'nama' => $brand_name,
        ]);

        return response()->json(['msg' => 'Data has been added Successfully!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    public function indexAdmin()
    {
        $brands = Brand::orderBy('nama')->get();
        // dd($brands);
        // var_dump($brands);

        return view('Admin.Brand.index', compact('brands'));
    }

    public function createBrandPage()
    {
        return view("Admin.Brand.create");
    }

    public function updateBrand(Request $request)
    {
        $brandName = $request->get('brandName');
        $newBrandName = $request->get('newBrandName');

        DB::table('brands')->where('nama', $brandName)->update(['nama' => $newBrandName]);

        return response()->json(["msg" => "Data has been updated successfully!!!"], 200);
    }

    public function deleteBrand(Request $request)
    {
        $brandName = $request->get('brandName');

        Brand::where('nama', $brandName)->delete();

        return response()->json(["msg" => "Data has been deleted successfully!!!"], 200);
    }
}
