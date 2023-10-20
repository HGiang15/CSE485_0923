@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Bài viết')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Bài viết</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('articles.create') }}" class="btn btn-success float-end">Thêm mới bài viết</a>
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
                    <th>Mã bài viết</th>
                    <th>Tiêu đề</th>
                    <th>Tên bài hát</th>
                    <th>Mã thể loại</th>
                    <th>Tóm tắt</th>
                    <th>Nội dung</th>
                    <th>Mã tác giả</th>
                    <th>Ngày viết</th>
                    <th>Ảnh</th>
                    <th class="text-center">Chi tiết</th>
                    <th class="text-center">Sửa</th>
                    <th class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->idArticle }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->nameSong }}</td>
                        <td>{{ $article->idCategory }}</td>
                        <td>{{ $article->summary }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->idAuthor }}</td>
                        <td>{{ $article->dateW }}</td>

                        <td><img width="200" height="200" src=" {{ asset( $article->imgArticle ) }}" alt=""></td>
                        <td class="text-center">
                            <a href="{{ route('articles.show', $article->idArticle) }}" class="btn btn-secondary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            {{-- /articles/{{ $article->idArticle }}/edit --}}
                            <a href="{{ route('articles.edit', $article->idArticle) }}" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#modal{{ $article->idArticle }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $article->idArticle }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">XÓA BÀI VIẾT</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa bài viết có mã là {{ $article->idArticle }}  này không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        {{-- /articles/{{ $article->idArticle }} --}}
                                        <form action="{{ route('articles.destroy', $article->idArticle) }}" method="POST">
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
            {{ $articles->links() }}
        </div>
    </div>
</div>

@endsection