@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Thêm tác phẩm')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>ADD</h3>       
            </div>
            <div class="col-md-6">
                <a href="{{ route('artworks.index') }}" class="btn btn-primary float-end">List of works</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    {{-- tentp --}}
                    <div class="form-group">
                        <label for="">Artist_name</label>
                        <input type="text" name="artist_name" class="form-control" placeholder="Nhập tên tác phẩm">
                    </div>
                    {{-- Mota --}}
                    <div class="form-floating mt-4">
                        <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                        <label for="floatingTextarea2" class="text-secondary">Description</label>
                    </div>
                    {{-- Loại hinh --}}
                    <div class="form-group mt-4">
                        <label class="input-group-text" for="inputGroupSelect01">Art_type</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="art_type">
                            <option value="" selected>Select</option>
                            <option value="paint">Paint</option>
                            <option value="music">Music</option>
                            <option value="literature">Literature</option>
                        </select>
                    </div>
                    {{-- url --}}
                    <div class="form-group">
                        <label for="">Media_link</label>
                        <input type="text" name="media_link" class="form-control" placeholder="Nhập liên kết">
                    </div>
                    {{-- img --}}
                    <div class="form-group mt-4">
                        <label for="">Image</label>
                        <input type="file" name="cover_image" class="form-control-file" >
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Add</button>
        </form>
    </div>
</div>
@endsection