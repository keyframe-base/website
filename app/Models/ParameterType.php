<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ParameterType extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'name',
        'css_suffix',
        'whitespace_needed'
    ];

    public function parameters(): HasMany {
        return $this->hasMany(Parameter::class);
    }
}
