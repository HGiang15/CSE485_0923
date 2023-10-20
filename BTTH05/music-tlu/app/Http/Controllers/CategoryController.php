<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // SELECT * FROM categories LIMIT 5 OFFSET ((page_number - 1) * 5)
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories'))->with((request()->input('page', 1) - 1) *5);
    }

    public function create()
    {
        return view('admin.category.create');
        
    }

    public function store(Request $request)
    {
        $categories = Category::create([
            'nameCategory' => $request->nameCategory
        ]);
    
        return redirect()->route('categories.index')->with('information', 'Thêm thể loại thành công !');
    }

    public function show(string $id)
    {
        $category = Category::where('idCategory', $id)->first();

        return view('admin.category.show', compact('category'));
    }

    public function edit(string $id)
    {
        $category = Category::where('idCategory',$id)->first();
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        Category::where('idCategory', $id)->update([
            'nameCategory' => $request->input('nameCategory')
        ]);

        return redirect()->route('categories.index')->with('information', 'Cập nhật thể loại thành công!');
    }

    public function destroy(string $id)
    {
        Category::where('idCategory', $id)->delete();
        return redirect()->route('categories.index')->with('information', 'Xóa thể loại thành công');
    }
}
