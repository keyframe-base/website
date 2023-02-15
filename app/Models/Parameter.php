<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parameter extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'name',
        'variable_name',
        'parameter_type_id',
        'min_value',
        'max_value',
    ];

    public function animationParameters(): HasMany {
        return $this->hasMany(AnimationParameter::class);
    }

    public function animations(): BelongsToMany {
        return $this->belongsToMany(Animation::class, 'animation_parameters');
    }

    public function parameterType(): BelongsTo {
        return $this->belongsTo(ParameterType::class);
    }
}
