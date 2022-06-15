<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Blog extends Component
{

    public Collection $posts;

    public function mount() {
        $this->posts = Post::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.blog');
    }
}
