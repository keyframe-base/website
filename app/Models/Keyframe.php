<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keyframe extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'name',
        'css_name',
        'css',
        'animation_id',
        'cubic_bezier_function_id',
        'duration',
        'delay',
        'keep_result_after_playing',
        'direction_id'
    ];

    public function cubicBezierFunction(): BelongsTo {
        return $this->belongsTo(CubicBezierFunction::class);
    }

    public function animationDirection(): BelongsTo {
        return $this->belongsTo(AnimationDirection::class);
    }

    public function animation(): BelongsTo {
        return $this->belongsTo(Animation::class);
    }
}
