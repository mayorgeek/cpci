<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class BlogDetails extends Component implements HasForms
{
    use InteractsWithForms;

    public Post $post;
    public string $test = "goodboys calm";

    public function mount($slug) {
        $this->post = Post::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.blog-details');
    }

    public function postComment(): void {

    }

    protected function getFormSchema(): array
    {
        return [
            RichEditor::make('comment')
                ->disableAllToolbarButtons(),
        ];
    }

}
