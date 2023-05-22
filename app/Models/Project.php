<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Traits\LikeTrait;

class Project extends Model
{
    use HasFactory;
    use LikeTrait;

    protected $fillable = ['name', 'description', 'body', 'stack'];
    protected $casts = ['stack' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likedByUser($user = null, $project = null)
    {
        return (bool) Like::where('user_id', $user->id)->where('project_id', $project->id)->where('liked', true)->get();
    }
}
