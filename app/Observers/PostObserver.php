<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function creating(Post $post): void
    {
        if (!isset($_SERVER['argv']) || !is_array($_SERVER['argv']) || !App::runningInConsole()) {
            if (auth()->check()) {
                $post->user_id = auth()->user()->id;
            }
        }
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleting(Post $post): void
    {
        if ($post->image) {
            Storage::delete($post->image->url);
        }
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
