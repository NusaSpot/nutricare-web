<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class NutritionistProfile extends Model
{
    protected $guarded = [];

    public function nutritionist(): BelongsTo
    {
        return $this->belongsTo(Nutritionist::class);
    }

    public function getProfilePictureLinkAttribute()
    {
        return $this->attributes['profile_picture'] != null ? Storage::disk('gcs')->url($this->attributes['profile_picture']) : null;
    }

    public function getCvLinkAttribute()
    {
        return $this->attributes['cv'] != null ? Storage::disk('gcs')->url($this->attributes['cv']) : null;
    }
}
