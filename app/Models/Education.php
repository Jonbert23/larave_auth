<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_from',
        'year_to',
        'course',
        'school_name',
        'user_id'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
