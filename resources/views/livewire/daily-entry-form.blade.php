<div class="container mt-5">
    <h1>New Daily Entry</h1>
    <form wire:submit.prevent="saveEntry">
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" id="date" wire:model="date" class="form-control">
            @error('date')  
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" wire:model="content" class="form-control" rows="5"></textarea>
            @error('content')  
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" id="icon" wire:model="icon" class="form-control">
            @error('icon')  
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save Entry</button>
        </div>
    </form>
</div>
