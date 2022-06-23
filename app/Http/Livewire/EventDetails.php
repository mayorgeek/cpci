<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventDetails extends Component
{
    public $event;

    public function mount($slug) {
        $this->event = Event::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.event-details');
    }
}
