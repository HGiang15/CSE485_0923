@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Thêm thể loại')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Thêm mới thể loại</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('categories.index') }}" class="btn btn-primary float-end">Danh sách thể loại</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    {{-- HoTen --}}
                    <div class="form-group">
                        <label for="">Tên thể loại</label>
                        <input type="text" name="nameCategory" class="form-control" placeholder="Nhập tên thể loại">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Lưu</button>
        </form>
    </div>
</div>
@endsection