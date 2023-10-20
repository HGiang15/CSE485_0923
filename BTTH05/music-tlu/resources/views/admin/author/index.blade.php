@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Tác giả')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Tác giả</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('authors.create') }}" class="btn btn-success float-end">Thêm mới tác giả</a>
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
                    <th>Mã tác giả</th>
                    <th>Tên tác giả</th>
                    <th class="text-center">Ảnh tác giả</th>
                    <th class="text-center">Chi tiết</th>
                    <th class="text-center">Sửa</th>
                    <th class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->idAuthor }}</td>
                        <td>{{ $author->nameAuthor }}</td>
                        <td class="text-center"><img width="250" height="250" src="{{ asset( $author->imgAuthor ) }}" alt=""></td>
                        <td class="text-center">
                            <a href="{{ route('authors.show',  $author->idAuthor) }}" class="btn btn-secondary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            {{-- /authors/{{ $author->idAuthor }}/edit --}}
                            <a href="{{ route('authors.edit',  $author->idAuthor) }}" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#modal{{ $author->idAuthor }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $author->idAuthor }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">XÓA TÁC GIẢ</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa tác giả có mã là {{ $author->idAuthor }} này không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('authors.destroy', $author->idAuthor) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination custom-pagination justify-content-center">
            {{ $authors->links() }}
        </div>
    </div>
</div>

@endsection