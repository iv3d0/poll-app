<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Poll;
use App\Models\Vote;

use Livewire\Component;
use Livewire\Attributes\On;

class Polls extends Component
{

    #[On('poll-created')]
    public function render()
    {
        $polls = Poll::with('options.votes')->get();
        return view('livewire.polls', compact('polls'));
    }
    public function vote($optionId, Option $option)
    {
        $option = Option::find($optionId);
        // dd($option->poll);
        $option->votes()->create();
    }
}
