<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class bookshelfs extends Model
{
    use HasFactory;

    public function books(): BelongsTo
    {
        return $this->belongsTo(books::class);
    }
}
