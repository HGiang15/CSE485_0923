<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Artwork;
class ArtworkController extends Controller
{

    public function index()
    {
        $artworks = Artwork::paginate(5);
        return view('admin.artwork.index', compact('artworks'))->with('i', (request()->input('page', 1) - 1) *5);
    }

    public function create()
    {
        return view('admin.artwork.create');
    }

    public function store(Request $request)
    {
        $filename = '';
        if ($request->hasFile('cover_image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/artwork/' . time() . '.' .$request->file('cover_image')->extension(); 
            $request->file('cover_image')->move(public_path('/assets/img/artwork/'), $filename);
        }
        
        $artworks = Artwork::create([
            'artist_name' => $request->artist_name,
            'description' => $request->description,
            'art_type' => $request->art_type,
            'media_link' => $request->media_link,
            'cover_image' => $filename

        ]);

        return redirect()->route('artworks.index')->with('information', 'ADD SUCCESS !');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $artwork = Artwork::where('id', $id)->first();
        return view('admin.artwork.edit', compact('artwork'));
    }

    public function update(Request $request, string $id)
    {
        $artwork = Artwork::findOrFail($id);
        $filename = $artwork->cover_image;

        if ($request->hasFile('cover_image')) {
            // Xóa tệp tin cũ
            if ($artwork->cover_image) {
                Storage::delete($artwork->cover_image);
            }

            // Tải lên tệp tin mới
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/artwork/' . time() . '.' . $request->file('cover_image')->extension();
            $request->file('cover_image')->move(public_path('/assets/img/artwork/'), $filename);
        }

        $artwork->update([
            'artist_name' => $request->input('artist_name'),
            'description' => $request->input('description'),
            'art_type' => $request->input('art_type'),
            'media_link' => $request->input('media_link'),
            'cover_image' => $filename
        ]);

        return redirect()->route('artworks.index')->with('information', 'UPDATED SUCCESS!');
    }


    public function destroy(string $id)
    {
        Artwork::where('id', $id)->delete();
        
        return redirect()->route('artworks.index')->with('information', 'REMOVE SUCCESS');
    }
}
