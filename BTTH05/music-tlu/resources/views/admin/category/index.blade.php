@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Thể loại')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Thể loại</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('categories.create') }}" class="btn btn-success float-end">Thêm mới thể loại</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('information'))
            <div class="alert alert-success">
                {{ Session::get('information') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã thể loại</th>
                    <th>Tên thể loại</th>
                    <th class="text-center">Chi tiết</th>
                    <th class="text-center">Sửa</th>
                    <th class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->idCategory }}</td>
                        <td>{{ $category->nameCategory }}</td>
                        <td class="text-center">
                            <a href="{{ route('categories.show',  $category->idCategory) }}" class="btn btn-secondary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            {{-- /categories/{{  $category->idCategory }}/edit --}}
                            <a href="{{ route('categories.edit',  $category->idCategory) }}" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#modal{{ $category->idCategory }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $category->idCategory }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE CATEGORY</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa thể loại có mã là {{ $category->idCategory }} này không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        {{-- /categories/{{ $category->idCategory }} --}}
                                        <form action="{{ route('categories.destroy',  $category->idCategory) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="sbmit" class="btn btn-primary">Yes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination  custom-pagination justify-content-center">
            {{ $categories->links() }}
        </div>
    </div>
</div>

@endsection