<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public int $type;

    public function render()
    {
        $posts = Post::where('post_type_id', $this->type)
            ->OrderBy('id', 'desc')
            ->paginate(5);

        return view('livewire.posts', compact('posts'));
    }
}
