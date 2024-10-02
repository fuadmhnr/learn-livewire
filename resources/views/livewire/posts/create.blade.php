<div class="card">
    <div class="card-body">
        <h5 class="card-title">New Post</h5>
        <form wire:submit="save">
            <div class="mb-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" wire:model="title" />
                @error('title')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" wire:model="content" rows="3"></textarea>
                @error('content')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Post it!</button>
        </form>    
    </div>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
