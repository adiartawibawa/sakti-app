<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class AllArticle extends Component
{
    public $articles;
    #[Url]
    public $category = null;
    #[Url]
    public $categoryType = null;

    public function mount()
    {
        $category = $this->category;
        $categoryType = $this->categoryType;

        $query = Post::query()->latest();

        if ($category && $categoryType) {
            $query->whereHas($categoryType, function ($query) use ($category) {
                $query->where('name', $category);
            });
        }

        $this->articles = $query->get();
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.articles.all-article', [
            'articles' => $this->articles,
            'categoryType' => $this->categoryType,
        ]);
    }
}
