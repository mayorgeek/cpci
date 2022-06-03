<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tithe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function branch(): BelongsTo {
        return $this->belongsTo(Branch::class);
    }

}
