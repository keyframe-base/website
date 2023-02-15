<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnimationObject extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        "name",
        "icon",
        "description",
        "html",
    ];

    public function animations(): HasMany {
        return $this->hasMany(Animation::class);
    }

    public function animationObjectElements(): HasMany {
        return $this->hasMany(AnimationObjectElement::class);
    }
}
