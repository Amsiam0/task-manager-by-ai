<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_completed',
        'is_starred',
        'user_id',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
        'is_starred' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}