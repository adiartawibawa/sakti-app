<?php

namespace App\Livewire\Pages\Welcome;

use App\Models\Post;
use Livewire\Component;

class RecentPost extends Component
{
    public function getRecentArticles()
    {
        return Post::latest()->take(6)->get();
    }

    public function render()
    {
        return view('livewire.pages.welcome.recent-post', [
            'recentArticles' => $this->getRecentArticles(),
        ]);
    }
}
