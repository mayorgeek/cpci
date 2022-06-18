<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.blog', [
            'posts' => Post::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }
}
