<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'skill_type',
        'mastery',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
