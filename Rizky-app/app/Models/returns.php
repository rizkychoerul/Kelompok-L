<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class returns extends Model
{
    use HasFactory;

    public function loan_detail(): HasOne
    {
        return $this->hasOne(loan_detail::class);
    }
}
