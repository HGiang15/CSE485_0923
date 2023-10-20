@extends('layouts.base')

@section('title', 'Chi tiết bài viết')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="container p-5 shadow">
    <div class="row">
        <div class="col-md-4 mt-5">
            <img src="{{ $article->imgArticle }}" alt="{{ $article->imgArticle }}" style="height: 20rem; width: 20rem; border-radius: 20px;">
        </div>
        <div class="col-md-5">
            <h2 class="text-success text-center fst-italic">Thông tin bài viết</h2>
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-primary fs-4 fw-bold"><span>{{ $article->title }}</span></p>
                    <p><span class="card-title fw-bold">Mã bài viết: </span>{{$article->idArticle}}</p>
                    <p><span class="card-title fw-bold">Bài hát: </span>{{$article->nameSong}}</p>
                    <p><span class="card-title fw-bold">Mã thể loại: </span>{{$article->idCategory}}</p>
                    <p><span class="card-title fw-bold">Thể loại: </span>{{$category->nameCategory}}</p>
                    <p><span class="card-title fw-bold">Tóm tắt: </span>{{$article->summary}}</p>
                    <p><span class="card-title fw-bold">Nội dung: </span>{{$article->content}}</p>
                    <p><span class="card-title fw-bold">Mã tác giả: </span>{{$article->idAuthor}}</p>
                    <p><span class="card-title fw-bold">Tác giả: </span>{{$author->nameAuthor}}</p>
                    <p><span class="card-title fw-bold">Ngày viết: </span>{{$article->dateW}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <a href="{{ route('articles.index') }}" class="btn btn-primary float-end">Danh sách bài viết</a>
        </div>
    </div>

</div>
@endsection