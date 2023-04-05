<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();
        return view('layouts.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => ['required', 'string', 'max:100']
        ]);

        Category::create([
            'name' => $validated['category_name']
        ]);

        return redirect()->route('view.category')->with('success', 'Berhasil menambahkan kategori produk');
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
    public function edit($id)
    {
        $data['categories'] = Category::find($id);
        return view('layouts.category.edit_category', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_name' => ['required', 'string', 'max:100']
        ]);

        Category::where('id', $id)->update([
            'name' => $validated['category_name']
        ]);

        return redirect()->route('view.category')->with('success', 'Berhasil mengupdate kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // untuk menghapus gambar yang ada di storage
        $imgProduct = Category::find($request->delete_id)->products->get(0);

        $category = Category::find($request->delete_id);
        unlink(storage_path('app\public\images\products\\'.$imgProduct->image));
        $category->delete();
        
        return redirect()->route('view.category')->with('success', 'Berhasil menghapus kategori');
    }
}
