<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class loan_detail extends Model
{
    use HasFactory;

    public function returns(): BelongsTo
    {
        return $this->belongsTo(returns::class);
    }

    public function books(): BelongsTo
    {
        return $this->belongsTo(books::class);
    }
}
