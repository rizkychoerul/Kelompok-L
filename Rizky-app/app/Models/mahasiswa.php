<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'npm'
    ];

    protected $guarded = [
        'id'
    ];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(dosen::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
