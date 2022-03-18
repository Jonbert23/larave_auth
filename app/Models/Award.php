<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'award_title',
        'company_name',
        'year_from',
        'year_to',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
