<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnimationDirection extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        "name",
        "css_name"
    ];

    public function keyframes(): HasMany {
        return $this->hasMany(Keyframe::class);
    }
}
