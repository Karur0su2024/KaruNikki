<?php

use Livewire\Volt\Component;
use App\Models\DailyEntry;

new class extends Component {
    public $entry;
    public $content;

    public function mount($entry)
    {
        $this->entry = $entry;

        $this->content = $this->entry->content;
    }

    public function saveContent()
    {
        $this->entry->content = $this->content;
        $this->entry->save();
    }
};

?>

<!-- Editable Form Section -->
<div>
    <form wire:submit.prevent="saveContent">
        <textarea class="form-control w-full border-gray-300 rounded-lg mb-4 p-3" name="content" wire:model="content" id="content"
            cols="30" rows="10" placeholder="Write your content here..."></textarea>
        <button class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
            type="submit">Save</button>
    </form>
</div>
