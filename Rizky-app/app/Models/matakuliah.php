<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class matakuliah extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'kode_matakuliah'
    ];

    protected $guarded = [
        'id'
    ];

    public function jadwal(): HasOne
    {
        return $this->hasOne(jadwal::class);
    }

    public function jadwal2(): HasMany
    {
        return $this->hasMany(jadwal::class);
    }
}
