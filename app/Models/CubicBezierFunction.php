<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CubicBezierFunction extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'x1',
        'y1',
        'x2',
        'y2',
    ];

    public function keyframes(): HasMany {
        return $this->hasMany(Keyframe::class);
    }
}
