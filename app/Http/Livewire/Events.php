<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.events', [
            'events' => Event::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }
}
