@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Sửa tác giả')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Sửa tác giả</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('authors.index') }}" class="btn btn-primary float-end">Danh sách tác giả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('authors.update', $author->idAuthor) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    {{-- MTL --}}
                    <div class="form-group">
                        <label for="">Mã tác giả</label>
                        <input type="text" name="idAuthor" class="form-control bg-warning" value="{{ $author->idAuthor }}" readonly>
                    </div>
                    {{-- HoTen --}}
                    <div class="form-group">
                        <label for="">Tên tác giả</label>
                        <input type="text" name="nameAuthor" class="form-control" value="{{ $author->nameAuthor }}">
                    </div>
                    {{-- img --}}
                    <div class="form-group mt-4">
                        <label for="">Hình ảnh tác giả</label>
                        <input type="file" name="imgAuthor" class="form-control-file" accept="image/*" value="{{ $author->imgAuthor }}">
                        @if ($author->imgAuthor)
                            <img src="{{ asset($author->imgAuthor) }}" alt="Ảnh tác giả" style="max-width: 200px; margin-top: 10px;">
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Cập nhật</button>
        </form>
    </div>
</div>
@endsection