<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use auth;

use Illuminate\Support\Facades\DB;
class PromosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = DB::table('promos')->get();
     return view('promos.index',compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $foto1 = $request->file('foto1');
                $extfoto1= $foto1->getClientOriginalExtension();
                $newfoto1= date("Ymd_His")."foto1.".$extfoto1;
                $foto1->move('uploads/foto',$newfoto1);
                $fotoPath1 = 'uploads/foto/'.$newfoto1;

                DB::table('promos')->insert(
                    [
                        'nama' => $request->namapromos,
                        'deskripsi' => $request->deskripsi,
                        'kode' => $request->kode,
                        'diskon' => $request->diskon,
                        'gambar' => $fotoPath1,
                    ]
                );
            return redirect('/promos')->with('status', 'trueinsert');
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
        $promos = DB::table('promos')->find($id);

        return view('promos.update',compact('promos'));
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
        $foto1 = $request->file('foto1');
        $extfoto1= $foto1->getClientOriginalExtension();
        $newfoto1= date("Ymd_His")."foto1.".$extfoto1;
        $foto1->move('uploads/foto',$newfoto1);
        $fotoPath1 = 'uploads/foto/'.$newfoto1;

        DB::table('promos')->where('idpromos',$id)->update(
            [
                'nama' => $request->namapromos,
                'deskripsi' => $request->deskripsi,
                'kode' => $request->kode,
                'diskon' => $request->diskon,
                'gambar' => $fotoPath1,
            ]
        );
    return redirect('/promos')->with('status', 'trueinsert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        DB::table('promos')->where('idpromos',$id)->delete();

    return redirect('/promos')->with('status', 'trueinsert');
    }
}
