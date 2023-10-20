<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{

    protected $fillable = [
        'id',
        'artist_name',
        'description',
        'art_type',
        'media_link',
        'cover_image',
    ];
    public $timestamps = false;

    use HasFactory;
}
