@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Sửa tác phẩm')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Edit</h3>       
            </div>
            <div class="col-md-6">
                <a href="{{ route('artworks.index') }}" class="btn btn-primary float-end">List of works</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('artworks.update', $artwork->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    {{-- MaTP --}}
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" name="id" class="form-control bg-warning" value="{{ $artwork->id }}" readonly>
                    </div>
                    {{-- TenTP --}}
                    <div class="form-group">
                        <label for="">Artist_name</label>
                        <input type="text" name="artist_name" class="form-control" value="{{ $artwork->artist_name }}">
                    </div>
                    {{-- Mota --}}
                    <div class="form-floating mt-4">
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="description">{{ $artwork->description }}</textarea>
                        <label for="floatingTextarea2" class="text-secondary">Description</label>
                    </div>
                    {{-- Loại hinh --}}
                    <div class="form-group mt-4">
                        <label class="input-group-text" for="inputGroupSelect01">Art_type</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="art_type">
                            <option value="" selected>Chọn</option>
                            <option value="paint" @if ($artwork->art_type == 'paint') selected @endif>Paint</option>
                            <option value="music" @if ($artwork->art_type == 'music') selected @endif>Music</option>
                            <option value="literature" @if ($artwork->art_type == 'literature') selected @endif>Literature</option>
                        </select>
                    </div>
                    {{-- url --}}
                    <div class="form-group">
                        <label for="">Media Link</label>
                        <input type="text" name="media_link" class="form-control" value="{{ $artwork->media_link }}">
                    </div>
                    {{-- img --}}
                    <div class="form-group mt-4">
                        <label for="">Image</label>
                        <input type="file" name="cover_image" class="form-control-file" value="{{ $artwork->cover_image }}">
                        @if ($artwork->cover_image)
                            <img src="{{ asset($artwork->cover_image) }}" alt="Ảnh" style="max-width: 200px; margin-top: 10px;">
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Update</button>
        </form>
    </div>
</div>
@endsection