<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class jadwal extends Model
{
    use HasFactory;

    protected $guarded =[
        'id'
    ];

    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(matakuliah::class);
    }

    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(dosen::class);
    }
}
