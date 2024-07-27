<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'image',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
