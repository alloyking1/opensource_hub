<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'body', 'stack'];
    protected $casts = ['stack' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
