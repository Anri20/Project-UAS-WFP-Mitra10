<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = DB::table('shops')
                ->join('shop_areas','shops.shop_area_id','shop_areas.idshopareas')
                ->get(
                    array(
                        'shops.idshops as idshops',
                        'shops.nama as nama_toko',
                        'shop_areas.nama as nama_area',
                        'shops.nomor_whatsapp',
                        'shop_areas.idshopareas as idshopareas'

                    )
                );
        return view('shop.index', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shoparea = DB::table('shop_areas')
        ->get();

        return view('shop.create',compact('shoparea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


                DB::table('shops')->insert(
                    [
                        'nama' => $request->namashop,
                        'nomor_whatsapp' => $request->nowhatapp,
                        'shop_area_id' => $request->shoparea
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
        $shops = DB::table('shops')->find($id);

        return view('shop.update',compact('toko'));
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
