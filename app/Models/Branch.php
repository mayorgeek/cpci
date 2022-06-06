<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Tithe;
use App\Models\Offering;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function offerings(): HasMany {
        return $this->hasMany(Offering::class);
    }

    public function tithes(): HasMany {
        return $this->hasMany(Tithe::class);
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class);
    }

    public function announcement(): HasMany {
        return $this->hasMany(Announcement::class);
    }

}
