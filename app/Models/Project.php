<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'body', 'stack'];
    protected $casts = ['stack' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //$user->liked($post)
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked,
        ]);
    }

    public function dislike($user = null)
    {
        $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes->where('project_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $user->likes->where('project_id', $this->id)->where('liked', false)->count();
    }

    //like relationship
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
