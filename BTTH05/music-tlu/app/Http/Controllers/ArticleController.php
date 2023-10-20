<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Article;
use App\Models\Category;
use App\Models\Author;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::paginate(5);
        return view('admin.article.index', compact('articles'))->with('i', (request()->input('page', 1) - 1) *5);
    }

    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.article.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        $filename = '';
        if ($request->hasFile('imgArticle')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/article/' . time() . '.' .$request->file('imgArticle')->extension(); 
            $request->file('imgArticle')->move(public_path('/assets/img/article/'), $filename);
        }
        
        $articles = Article::create([
            'title' => $request->title,
            'nameSong' => $request->nameSong,
            'idCategory' => $request->idCategory,
            'summary' => $request->summary,
            'content' => $request->content,
            'idAuthor' => $request->idAuthor,
            'dateW' => $request->dateW,
            'imgArticle' => $filename

        ]);

        return redirect()->route('articles.index')->with('information', 'Thêm bài viết thành công !');
    }

    public function show(string $id)
    {
        $article = Article::where('idArticle', $id)->first();
        $author = $article->author;
        $category = $article->category;
        return view('admin.article.show', compact('article', 'author', 'category'));
    }

    public function edit(string $id)
    {
        $article = Article::where('idArticle', $id)->first();
        $categories = Category::all();
        $authors = Author::all();

        return view('admin.article.edit', compact('article','categories','authors'));
    }

    public function update(Request $request, string $id)
    {
        $article = Article::where('idArticle', $id)->first();

        $filename = $article->imgArticle; // Giữ nguyên tên tệp tin cũ
        if ($request->hasFile('imgArticle')) {
            // Xóa tệp tin cũ
            if ($article->imgArticle) {
                Storage::delete($article->imgArticle);
            }

            // Tải lên tệp tin mới
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/article/' . time() . '.' . $request->file('imgArticle')->extension();
            $request->file('imgArticle')->move(public_path('/assets/img/article/'), $filename);
        }

        Article::where('idArticle', $id)->update([
            'title' => $request->input('title'),
            'nameSong' => $request->input('nameSong'),
            'idCategory' => $request->input('idCategory'),
            'summary' => $request->input('summary'),
            'content' => $request->input('content'),
            'idAuthor' => $request->input('idAuthor'),
            'dateW' => $request->input('dateW'),
            'imgArticle' => $filename
        ]);

        return redirect()->route('articles.index')->with('information', 'Cập nhật bài viết thành công!');
    }

    public function destroy(string $id)
    {
        Article::where('idArticle', $id)->delete();
        
        return redirect()->route('articles.index')->with('information', 'Xóa bài viết thành công');
    }
}
