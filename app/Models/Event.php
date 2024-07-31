<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'judul',
        'deskripsi',
        'alamat',
        'kota',
        'gmaps',
        'image',
        'wagrup',
        'volunteer',
        'partisipan',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user')->withTimestamps();
    }
}
