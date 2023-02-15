<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimationParameter extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'parameter_id',
        'animation_id',
        'value',
    ];

    public function animation(): BelongsTo {
        return $this->belongsTo(Animation::class);
    }

    public function parameter(): BelongsTo {
        return $this->belongsTo(AnimationParameter::class);
    }
}
