<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialiteLogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nutritionist_id',
        'provider',
        'provider_id'
    ];

    public function nutritionist(): BelongsTo
    {
        return $this->belongsTo(Nutritionist::class);
    }
}
