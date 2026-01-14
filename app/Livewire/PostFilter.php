<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostFilter extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.post-filter', compact('posts'));
    }
}
