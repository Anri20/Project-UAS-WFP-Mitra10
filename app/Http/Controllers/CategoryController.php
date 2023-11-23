<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // dd($categories);

        return view('Week6.Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Week6.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = DB::table('categories')->insert(
            [
                'nama' => $request->nama
            ]
            );
            return redirect('/category')->with('status', 'trueinsert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function week4()
    {
        $categories = Category::all();


        return view('Week4.Category.index', compact('categories'));
    }

    public function reportCatAvgPrice()
    {
        $categories = Category::all();
        // dd($categories);
        foreach ($categories as $c) {
            $category_products = $c->products;
            $avgHarga = 0;
            if (count($category_products) != 0) {
                $arrHarga = [];
                foreach ($category_products as $cp) {
                    array_push($arrHarga, $cp->harga * (1 - $cp->diskon));
                    // echo $cp.'<br>';
                }
                // dd($arrHarga);
                $avgHarga = round((array_sum($arrHarga)) / count($arrHarga), 2);
            }
            $c['avgHarga'] = $avgHarga;
        }

        return view('Week5.Category.index', compact('categories'));
    }

    public function week6()
    {
        $categories = Category::all();
        // dd($categories);
        foreach ($categories as $c) {
            $category_products = $c->products;
            $avgHarga = 0;
            if (count($category_products) != 0) {
                $arrHarga = [];
                foreach ($category_products as $cp) {
                    array_push($arrHarga, $cp->harga * (1 - $cp->diskon));
                    // echo $cp.'<br>';
                }
                // dd($arrHarga);
                $avgHarga = round((array_sum($arrHarga)) / count($arrHarga), 2);
            }
            $c['avgHarga'] = $avgHarga;
        }

        return view('Week6.Category.index', compact('categories'));
    }

    public function week6Stock()
    {
        $categories = Category::all();
        // dd($categories);

        return view('Week6.Category.stock', compact('categories'));
    }

    public function showProducts()
    {
        $cat=Category::find($_POST['category_id']);
        $nama=$cat->nama_kategori;
        $data=$cat->products;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.showProducts',compact('nama','data'))->render()
        ),200);
    }

}
