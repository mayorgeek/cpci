<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class BlogDetails extends Component implements HasForms
{
    use InteractsWithForms;

    public Post $post;

    public function mount($slug) {
        $this->post = Post::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.blog-details');
    }

    public function postComment(): void {
        dd($this->form->getState());
        // $this->post->comments()->create($this->form->getState());
    }

    protected function getFormSchema(): array
    {
        return [
            Textarea::make('body')
                ->label('')
                ->rows(3),
        ];
    }

    protected function getFormModel(): string
    {
        return Comment::class;
    }

}
