@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Trang chủ quản trị')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="mx-5">
    <div class="m-5">
        <div class="row mx-5" style="justify-content: space-around;">
            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Người dùng</p>
                    <h3>{{ $users }}</h3>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Thể loại</p>
                    <h3>{{$category}}</h3>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Tác giả</p>
                    <h3>{{$author}}</h3>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Bài viết</p>
                    <h3>{{$article}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection