<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;


    protected $fillable = [
        'dest_name',
        'dest_category',
        'dest_location',
        'dest_desc',
        'dest_cover'
    ];

    public function photodests()
    {
        return $this->hasMany(Photodest::class);
    }
}
