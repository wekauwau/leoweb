<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Position extends Pivot
{
    protected $fillable = [
        'member_id',
        'executive_id',
        'division_id',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
