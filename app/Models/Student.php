<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $guarded= ['id'];
    protected $dates = ['create_at'];
=======
    protected $guarded = [
        "id"
    ];

    protected $with = [
        "major"
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
>>>>>>> a622e73 (init)
}
