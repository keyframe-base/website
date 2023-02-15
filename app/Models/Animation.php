<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animation extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        "name",
        "description",
        "animation_category_id",
        "animation_object_id",
    ];

    public function parameters(): BelongsToMany {
        return $this->belongsToMany(Parameter::class, 'animation_parameters');
    }

    public function animationParameters(): HasMany {
        return $this->hasMany(AnimationParameter::class);
    }

    public function keyframes(): HasMany {
        return $this->hasMany(Keyframe::class);
    }

    public function animationCategory(): BelongsTo {
        return $this->belongsTo(AnimationCategory::class);
    }

    public function animationObject(): BelongsTo {
        return $this->belongsTo(AnimationObject::class);
    }
}
