<?php

namespace App\View\Components\Home;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class PostSection extends Component
{
    public Collection $posts;

    public string $type;

    public function __construct(
        public int $postTypeId,
        public string $more,
    ) {
        $records = Post::where('post_type_id', $postTypeId)
            ->OrderBy('id', 'desc')
            ->take(3)
            ->with('image')
            ->get();

        $this->posts = $records;
        $this->type = match ($postTypeId) {
            1 => 'activities',
            2 => 'insights',
            3 => 'news',
        };
    }

    public function render(): View|Closure|string
    {
        return view('components.home.post-section');
    }
}
