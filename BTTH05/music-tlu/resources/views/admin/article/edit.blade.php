@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Sửa bài viết')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Sửa bài viết</h3>       
            </div>
            <div class="col-md-6">
                <a href="{{ route('articles.index') }}" class="btn btn-primary float-end">Danh sách bài viết</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('articles.update', $article->idArticle) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    {{-- MBV --}}
                    <div class="form-group">
                        <label for="">Mã bài viết</label>
                        <input type="text" name="idArticle" class="form-control bg-warning" value="{{ $article->idArticle }}" readonly>
                    </div>
                    {{-- Tieude --}}
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                    </div>
                    {{-- Tenbaihat --}}
                    <div class="form-group mt-4">
                        <label for="">Tên bài hát</label>
                        <input type="text" name="nameSong" class="form-control" value="{{ $article->nameSong }}">
                    </div>
                    {{-- MaTheLoai --}}
                    <div class="form-group mt-4">
                        <label class="input-group-text" for="inputGroupSelect01">Mã thể loại</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="idCategory">
                            @foreach ($categories as $category)
                            @if($category->idCategory == $article->idCategory)
                                <option value="{{$category->idCategory}}" selected>
                                    {{$category->idCategory}}
                                </option>
                            @else
                                <option value="{{$category->idCategory}}">
                                    {{$category->idCategory}}
                                </option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                    {{-- Tomtat --}}
                    <div class="form-floating mt-4">
                        <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px" name="summary">{{ $article->summary }}</textarea>
                        <label for="floatingTextarea2" class="text-secondary">Nội dung</label>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- ND --}}
                    <div class="form-floating mt-4">
                        <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px" name="content">{{ $article->content }}</textarea>
                        <label for="floatingTextarea2" class="text-secondary">Nội dung</label>
                    </div>
                    {{-- MaTacgia --}}
                    <div class="form-group mt-4">
                        <label class="input-group-text" for="inputGroupSelect01">Mã tác giả</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="idAuthor">
                            @foreach ($authors as $author)
                                @if($author->idAuthor == $article->idAuthor)
                                    <option value="{{$author->idAuthor}}" selected>
                                        {{$author->idAuthor}}
                                    </option>
                                @else
                                    <option value="{{$author->idAuthor}}">
                                        {{$author->idAuthor}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{-- Ngayviet --}}
                    <div class="form-group mt-4">
                        <span class="input-group-text" id="addon-wrapping">Ngày viết</span>
                        <input type="text" class="form-control me-5 bg-info" aria-label="dateW" aria-describedby="addon-wrapping" name="dateW" readonly value="{{ $article->dateW }}">
                    </div>
                    {{-- img --}}
                    <div class="form-group mt-4">
                        <label for="">Hình ảnh bài viết</label>
                        <input type="file" name="imgArticle" class="form-control-file" value="{{ $article->imgArticle }}">
                        @if ($article->imgArticle)
                            <img src="{{ asset($article->imgArticle) }}" alt="Ảnh bài viết" style="max-width: 200px; margin-top: 10px;">
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Lưu</button>
        </form>
    </div>
</div>
@endsection