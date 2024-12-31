<?php

namespace App\Livewire;

use Livewire\Component;

class DailyEntryForm extends Component
{
    public $date;
    public $content;
    public $icon;

    public function render()
    {
        return view('livewire.daily-entry-form')->layout('layouts.app', ['padding' => '5']);
    }

    public function saveEntry(){
        $this->validate([
            'date' => 'required|date',
            'content' => 'required',
            'icon' => 'nullable',
        ]);

        auth()->user()->dailyEntries()->create([
            'date' => $this->date,
            'content' => $this->content,
            'icon' => $this->icon,
        ]);

        $this->reset();
        $this->redirect(route('dashboard'));
        session()->flash('message', 'Daily entry saved successfully.');

    }
}
