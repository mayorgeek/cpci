<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class BlogDetails extends Component
{
    public Post $post;

    public function mount($slug) {
        $this->post = Post::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.blog-details');
    }
}
