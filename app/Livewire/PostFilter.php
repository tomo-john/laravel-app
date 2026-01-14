<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostFilter extends Component
{
    public $search = '';

    public function render()
    {
        $query = Post::query();
        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }
        $posts = $query->get();
        return view('livewire.post-filter', compact('posts'));
    }
}
