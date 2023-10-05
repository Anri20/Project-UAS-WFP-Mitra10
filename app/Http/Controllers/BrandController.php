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
        //
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

    public function week4()
    {
        $brands = Brand::all();
        // dd($brands);

        return view('Week4.Brand.index', compact('brands'));
    }

    public function week5()
    {
        $brands = DB::table('brands as b')
            ->join('products as p', 'b.idbrands', '=', 'p.brand_id')
            ->select('b.nama', DB::raw('count(b.nama) as \'supplied_products\''))
            ->groupBy('b.nama')
            ->orderBy(DB::raw('count(b.nama)'), 'asc')
            ->get();
        // dd($brands);

        return view('Week5.Brand.index', compact('brands'));
    }

    public function week6()
    {
        $brands = DB::table('brands as b')
            ->join('products as p', 'b.idbrands', '=', 'p.brand_id')
            ->select('b.nama', DB::raw('count(b.nama) as \'supplied_products\''))
            ->groupBy('b.nama')
            ->orderBy(DB::raw('count(b.nama)'), 'asc')
            ->get();
        // dd($brands);

        return view('Week6.Brand.index', compact('brands'));
    }

    public function week6Stock()
    {
        $brands = DB::table('brands as b')
            ->join('products as p', 'b.idbrands', '=', 'p.brand_id')
            ->select('b.nama', DB::raw('count(b.nama) as \'supplied_products\''))
            ->groupBy('b.nama')
            ->orderBy(DB::raw('count(b.nama)'), 'asc')
            ->get();
        // dd($brands);

        return view('Week6.Brand.stock', compact('brands'));
    }
}
