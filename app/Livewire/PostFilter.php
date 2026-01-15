<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostFilter extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $posts = Post::query()
        ->when($this->search, fn($q) =>
            $q->where('title', 'like', '%' . $this->search . '%')
            ->orWhere('body', 'like', '%' . $this->search . '%')
        )->paginate(10);
        return view('livewire.post-filter', compact('posts'));
    }
}
