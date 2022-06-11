<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class EventDetails extends Component
{
    public Collection $event;

    public function mount($slug) {
        $this->event = Event::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.event-details');
    }
}
