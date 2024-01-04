<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', ['categories' => $categories]);
    }

    public function add()
    {
        return view('category-add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:categories|max:100'
        ]);

        $category = Category::create($request->all());
        return redirect('categories')->with('status', 'Kategori buku berhasil ditambahkan!');
    }

    public function edit($slug) {
        $category = Category::where('slug', $slug)->first();
        return view('category-edit', ['category' => $category]);
    }

    public function update(Request $request, $slug){
        $validate = $request->validate([
            'name' => 'required|unique:categories|max:100'
        ]);
        
        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('categories')->with('status', 'Kategori buku berhasil diubah!');
    }

    public function delete($slug){
        $category = Category::where('slug', $slug)->first();
        return view('category-delete', ['category' => $category]);
    }

    public function destroy($slug){
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('categories')->with('status', 'Kategori buku berhasil dihapus!');
    }

}
