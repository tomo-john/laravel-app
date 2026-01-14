<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostFilter extends Component
{
    public $search = '';

    public function render()
    {
        $posts = Post::query()
        ->when($this->search, fn($q) =>
            $q->where('title', 'like', '%' . $this->search . '%')
        )->get();
        return view('livewire.post-filter', compact('posts'));
    }
}
