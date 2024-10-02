<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule('required|min:3')]
    public string $title = '';

    #[Rule('required|min:3')]
    public string $content = '';

    public function save()
    {
        $user = User::find(1);
        $validated = $this->validate();

        // create a post via relation user->posts
        $user->posts()->create($validated);

        // reset the form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
