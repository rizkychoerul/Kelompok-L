<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class books extends Model
{
    use HasFactory;

    
    public function bookshelfs(): HasOne
    {
        return $this->hasOne(bookshelfs::class);
    }

    public function loan_detail(): HasOne
    {
        return $this->hasOne(loan_detail::class);
    }
    
    public function categories(): HasOne
    {
        return $this->hasOne(categories::class);
    }

    public function book_category(): BelongsToMany
    {
        return $this->belongsToMany(book_category::class);
    }
}
