<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    public function index()
    {
        // SELECT * FROM authors LIMIT 5 OFFSET ((page_number - 1) * 5)
        $authors = Author::paginate(5);
        return view('admin.author.index', compact('authors'))->with('i', (request()->input('page', 1) - 1) *5);
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
        $filename = '';
        if ($request->hasFile('imgAuthor')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/author/' . time() . '.' .$request->file('imgAuthor')->extension(); 
            $request->file('imgAuthor')->move(public_path('/assets/img/author/'), $filename);
        }

        $authors = Author::create([
            'nameAuthor' => $request->nameAuthor,
            'imgAuthor' => $filename
        ]);

        return redirect()->route('authors.index')->with('information', 'Thêm tác giả thành công !');
    }

    public function show(string $id)
    {
        $author = Author::where('idAuthor', $id)->first();

        return view('admin.author.show', compact('author'));
    }

    public function edit(string $id)
    {
        $author = Author::where('idAuthor',$id)->first();
        return view('admin.author.edit', compact('author'));
    }

    public function update(Request $request, string $id)
    {
        $author = Author::where('idAuthor', $id)->first();

        $filename = $author->imgAuthor; // Giữ nguyên tên tệp tin cũ
        if ($request->hasFile('imgAuthor')) {
            // Xóa tệp tin cũ
            if ($author->imgAuthor) {
                Storage::delete($author->imgAuthor);
            }

            // Tải lên tệp tin mới
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/author/' . time() . '.' . $request->file('imgAuthor')->extension();
            $request->file('imgAuthor')->move(public_path('/assets/img/author/'), $filename);
        }

        Author::where('idAuthor', $id)->update([
            'nameAuthor' => $request->input('nameAuthor'),
            'imgAuthor' => $filename
        ]);

        return redirect()->route('authors.index')->with('information', 'Cập nhật tác giả thành công!');
    }

    public function destroy(string $id)
    {
        Author::where('idAuthor', $id)->delete();
        
        return redirect()->route('authors.index')->with('information', 'Xóa tác giả thành công');
    }
}
