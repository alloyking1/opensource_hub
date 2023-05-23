<?php

namespace App\Traits;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

trait LikeTrait
{
    public function createLike($user, $project)
    {
        $like = Like::where('user_id', $user)->where('project_id', $project)->first();
        if ($like !== null) {
            switch ($like->liked) {
                case (true):
                    $like->update(['liked' => false]);
                    break;
                case (false):
                    $like->update(['liked' => true]);
                    break;
                default:
                    return false;
            }
        } else {
            Like::create([
                'user_id' => Auth::id(),
                'project_id' => $this->projectId,
                'liked' => true
            ]);
        }
    }

    public function isLikedBy($user, $projectId)
    {
        return (bool) Like::where('user_id', $user)->Where('project_id', $projectId)->Where('liked', true)->exists();
    }



    // public function dislike($user = null)
    // {
    //     $this->like($user, false);
    // }

    // public function isLikedBy(User $user)
    // {
    //     return (bool) $user->likes->where('project_id', $this->id)->where('liked', true)->count();
    // }

    // public function isDisLikedBy(User $user)
    // {
    //     return (bool) $user->likes->where('project_id', $this->id)->where('liked', false)->count();
    // }
}
