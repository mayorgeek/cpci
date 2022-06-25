<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Support\Facades\Auth;

class CommentBox extends Component implements HasForms
{
    use InteractsWithForms;

    public $post;
    public $body;

    public $rules = [
        'body' => 'required|string'
    ];

    public function render()
    {
        return view('livewire.comment-box');
    }

    public function postComment(): void 
    {
        $data = $this->form->getState();
        $data['username'] = Auth::user()->name;

        $this->post->comments()->create($data);
    }

    protected function getFormModel(): string
    {
        return Comment::class;
    }

    protected function getFormSchema(): array
    {
        return [
            Textarea::make('body')
                ->label('')
                ->rows(3),
        ];
    }

}
