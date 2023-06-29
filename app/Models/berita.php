<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_name',
        'berita_location',
        'berita_desc',
        'berita_cover',
    ];

    public function photoberita()
    {
        return $this->hasMany(photoberita::class);
    }
}
