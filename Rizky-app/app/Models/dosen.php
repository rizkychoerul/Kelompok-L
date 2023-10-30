<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\mahasiswa;

class dosen extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'nidn'
    ];

    protected $guarded = [
        'id'
    ];

    public function mahasiswa(): HasOne
    {
        return $this->hasOne(mahasiswa::class);
    }

    public function jadwal(): HasOne
    {
        return $this->hasOne(jadwal::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
