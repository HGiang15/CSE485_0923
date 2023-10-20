@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Tác phẩm')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>ART WORK</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('artworks.create') }}" class="btn btn-success float-end">ADD NEW</a>
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
                    <th>ID</th>
                    <th>Artist_name</th>
                    <th>Description</th>
                    <th>Art_type</th>
                    <th>Media_link</th>
                    <th>Image</th>
                    <th class="text-center">Detail</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->id }}</td>
                        <td>{{ $artwork->artist_name }}</td>
                        <td>{{ $artwork->description }}</td>
                        <td>{{ $artwork->art_type }}</td>
                        <td><a href="">{{ $artwork->media_link }}</a></td>
                        <td><img width="200" height="200" src=" {{ asset( $artwork->cover_image ) }}" alt=""></td>

                        <td class="text-center">
                            <a href="" class="btn btn-secondary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#modal{{ $artwork->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $artwork->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">XÓA TÁC PHẨM</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa tác phẩm có mã là {{ $artwork->id }} này không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST">
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
            {{ $artworks->links() }}
        </div>
    </div>
</div>

@endsection