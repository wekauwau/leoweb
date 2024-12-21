<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostView extends Component
{
    public Post $post;

    public function __construct(
        int $id,
    ) {
        $this->post = Post::find($id);
    }

    public function render(): View|Closure|string
    {
        return view('components.post-view');
    }
}
