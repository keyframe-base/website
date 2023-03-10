<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnimationCategory extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        "name",
    ];

    public function animations(): HasMany {
        return $this->hasMany(Animation::class);
    }
}
