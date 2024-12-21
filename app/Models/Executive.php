<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Executive extends Model
{
    protected $fillable = [
        'name',
    ];

    public function position(): HasOne
    {
        return $this->hasOne(Position::class);
    }
}
