<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Patient extends Model
{
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}
