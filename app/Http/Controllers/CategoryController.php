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
        // $parent_categories = DB::table('categories')
        //     ->where('parent_category_id', null)
        //     ->get();

        // $child_categories = DB::table('categories as c')
        //     ->join('categories as c1', 'c.parent_category_id', 'c1.idcategories')
        //     ->join('categories as c2', 'c1.parent_category_id', 'c2.idcategories')
        //     ->distinct()
        //     ->select('c.nama')
        //     ->get();

        // $subquery1 = DB::table('categories as c')
        //     ->join('categories as c1', 'c.parent_category_id', 'c1.idcategories')
        //     ->join('categories as c2', 'c1.parent_category_id', 'c2.idcategories')
        //     ->distinct()
        //     ->select('c.nama');

        // $subquery2 = DB::table('categories')
        //     ->where('parent_category_id', null)
        //     ->select('nama');

        // $sub_categories = DB::table('categories')
        //     ->whereNotIn('nama', $subquery1)
        //     ->whereNotIn('nama', $subquery2)
        //     ->get();

        // dd($sub_categories);

        $categories = Category::where('parent_category_id', null)->get();

        return view('Category.index', compact('categories'));
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
        $parent_category_id = $request->get('parent_category_id');
        $category_name = $request->get('category_name');

        DB::table('categories')->insert([
            'nama' => $category_name,
            'parent_category_id' => $parent_category_id,
        ]);

        return response()->json(['msg' => "Data has been added successfully!!!"], 200);
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

    public function displayCategories(Request $request)
    {
        $parent_category = $request->get('parentKategori');

        $child_categories = DB::table('categories as c')
            ->join('categories as c1', 'c.parent_category_id', 'c1.idcategories')
            ->join('categories as c2', 'c1.parent_category_id', 'c2.idcategories')
            ->distinct()
            ->select('c.nama')
            ->get();

        $sub_categories = DB::table('categories as c')
            ->join('categories as sc', 'c.idcategories', 'sc.parent_category_id')
            ->where('c.nama', $parent_category)
            ->select('sc.nama')
            ->get();

        return response()->json([
            'sub_categories' => $sub_categories,
            'child_categories' => $child_categories,
        ]);
    }

    public function showProducts()
    {
        $cat = Category::find($_POST['category_id']);
        $nama = $cat->nama_kategori;
        $data = $cat->products;
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('category.showProducts', compact('nama', 'data'))->render()
        ), 200);
    }

    public function indexAdmin()
    {
        $category = Category::all();

        return view('Admin.Category.index', compact('category'));
    }

    public function createCategoryPage()
    {
        $main_categories = DB::table('categories')
            ->where('parent_category_id', null)
            ->get();

        $subquery1 = DB::table('categories as c')
            ->join('categories as c1', 'c.parent_category_id', 'c1.idcategories')
            ->join('categories as c2', 'c1.parent_category_id', 'c2.idcategories')
            ->distinct()
            ->select('c.nama');

        $subquery2 = DB::table('categories')
            ->where('parent_category_id', null)
            ->select('nama');

        $sub_categories = DB::table('categories')
            ->whereNotIn('nama', $subquery1)
            ->whereNotIn('nama', $subquery2)
            ->get();

        $main_sub_categories = DB::table('categories')
            ->whereNotIn('nama', $subquery1)
            ->get();

        return view('Admin.Category.create', compact('main_categories', 'sub_categories', 'main_sub_categories'));
    }

    public function updateCategory(Request $request)
    {
        $categoryName = $request->get('categoryName');
        $newCategoryName = $request->get('newCategoryName');

        DB::table('categories')->where('nama', $categoryName)->update(['nama' => $newCategoryName]);

        return response()->json(["msg" => "Data has been updated successfully!!!"], 200);
    }

    public function deleteCategory(Request $request)
    {
        $categoryName = $request->get('categoryName');

        Category::where('nama', $categoryName)->delete();

        return response()->json(["msg" => "Data has been deleted successfully!!!"], 200);
    }
}
