<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        // $authors = Author::all();
        // return view('admin.author.index', compact('authors'));

        $authors = Author::paginate(5);
        return view('admin.author.index', compact('authors'))->with('i', (request()->input('page', 1) - 1) *5);
    }


    public function create()
    {
        return view('admin.author.create');
    }


    public function store(Request $request)
    {
        $authors = Author::create([
            'name' => $request->name,
        ]);

        return redirect()->route('authors.index')->with('information', 'Thêm tác giả thành công !');
    }


    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
        
    }

    public function edit(Author $author)
    {
        //
    }

    public function update(Request $request, Author $author)
    {
        //
    }


    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('information', 'Xóa thành công tác giả !');
    }
}
