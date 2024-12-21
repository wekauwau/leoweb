<?php

namespace App\View\Components\Layout;

use App\Models\Image;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Gallery extends Component
{
    public Collection $images;

    public function __construct()
    {
        $this->images = Image::OrderBy('id', 'desc')->take(15)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.layout.gallery');
    }
}
