<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'idCategory',
        'nameCategory',
    ];
    public $timestamps = false;

    use HasFactory;

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
