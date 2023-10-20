@extends('layouts.base')

@section('title', 'Chi tiết tác giả')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="container p-5 shadow">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $author->imgAuthor }}" alt="{{ $author->nameAuthor }}" style="height: 20rem; width: 20rem; border-radius: 20px;">
        </div>
        <div class="col-md-4">
            <h2 class="text-success fst-italic">Thông tin tác giả</h2>
            <div class="card">
                <div class="card-body">
                    <p><span class="card-title fw-bold">Mã tác giả: </span>{{ $author->idAuthor }}</p>
                    <p><span class="card-title fw-bold">Tên tác giả: </span>{{ $author->nameAuthor }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{{ route('authors.index') }}" class="btn btn-primary float-end">Danh sách tác giả</a>
        </div>
    </div>

</div>
@endsection