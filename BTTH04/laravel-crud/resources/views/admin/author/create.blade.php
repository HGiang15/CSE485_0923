@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Thêm tác giả')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Thêm mới tác giả</h3>       
            </div>
            <div class="col-md-6">
                <a href="{{ route('authors.index') }}" class="btn btn-primary float-end">Danh sách tác giả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('authors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    {{-- HoTen --}}
                    <div class="form-group">
                        <label for="">Tên tác giả</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên tác giả">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Lưu</button>
        </form>
    </div>
</div>
@endsection