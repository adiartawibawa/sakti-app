<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SingleArticle extends Component
{
    public ?Post $post;

    public function mount($slug)
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        // dd($this->post->tags());
        return view('livewire.pages.articles.single-article', [
            'post' => $this->post,
        ]);
    }
}
