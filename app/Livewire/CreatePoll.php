<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{
    #[Rule('required|min:3')]
    public $title;
    #[Rule('required|min:2')]
    public $options = [''];



    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addPollOption()
    {
        $this->options[] = '';
    }

    public function removePollOption($index)
    {
        unset($this->options[$index]);
        // Return Array Indexes
        $this->options = array_values($this->options);
    }

    public function createPoll()
    {
        // $poll = Poll::create([
        //     'name' => $this->title,
        // ]);
        // foreach ($this->options as $option) {

        //     $poll->options()->create(['name' => $option]);
        // }

        // Another Method To Save Data

        $this->validate();
        Poll::create([
            'name' => $this->title
        ])->options()->createMany(
            array_map(function ($option) {
                return ['name' => $option];
            }, $this->options)
        );


        // Reset Inputs
        $this->reset(['title', 'options']);
    }
}
