<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $guarded = [
        "id"
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }
}
