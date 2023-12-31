<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class categories extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'id'
    ];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(books::class);
    }
}
