@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Thêm bài viết')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Thêm mới bài viết</h3>       
            </div>
            <div class="col-md-6">
                <a href="{{ route('articles.index') }}" class="btn btn-primary float-end">Danh sách bài viết</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    {{-- Tieude --}}
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    {{-- Tenbaihat --}}
                    <div class="form-group mt-4">
                        <label for="">Tên bài hát</label>
                        <input type="text" name="nameSong" class="form-control" placeholder="Nhập tên bài hát">
                    </div>
                    {{-- MaTheLoai --}}
                    <div class="form-group mt-4">
                        <label class="input-group-text" for="inputGroupSelect01">Mã thể loại</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="idCategory">
                            @foreach ($categories as $category)
                            <option value="{{$category->idCategory}}">
                                {{$category->nameCategory}}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    {{-- Tomtat --}}
                    <div class="form-floating mt-4">
                        <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px" name="summary"></textarea>
                        <label for="floatingTextarea2" class="text-secondary">Tóm tắt</label>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- ND --}}
                    <div class="form-floating mt-4">
                        <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px" name="content"></textarea>
                        <label for="floatingTextarea2" class="text-secondary">Nội dung</label>
                    </div>
                    {{-- MaTacgia --}}
                    <div class="form-group mt-4">
                        <label class="input-group-text" for="inputGroupSelect01">Mã tác giả</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="idAuthor">
                            <option value="" selected>Chọn</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->idAuthor }}">{{ $author->nameAuthor }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Ngayviet --}}
                    <div class="form-group mt-4">
                        <span class="input-group-text" id="addon-wrapping">Ngày viết</span>
                        <input type="date" class="form-control me-5" aria-label="dateW" aria-describedby="addon-wrapping" name="dateW">
                    </div>
                    {{-- img --}}
                    <div class="form-group mt-4">
                        <label for="">Hình ảnh bài viết</label>
                        <input type="file" name="imgArticle" class="form-control-file" >
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Lưu</button>
        </form>
    </div>
</div>
@endsection