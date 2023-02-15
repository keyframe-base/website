<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimationObjectElement extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'name',
        'css_selector',
        'animation_object_id',
    ];

    public function animationObject(): BelongsTo {
        return $this->belongsTo(AnimationObject::class);
    }
}
