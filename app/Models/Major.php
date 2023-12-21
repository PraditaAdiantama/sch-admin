<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function classes(): HasMany
    {
        return $this->hasMany(ClassModel::class);
    }
}
