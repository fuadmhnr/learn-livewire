<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required|min:3')]
    public string $title = '';

    #[Rule('required|min:3')]
    public string $content = '';

    public function store()
    {
        // is there is no data is validated, use this
        // $validated = $this->all();

        // create a post via relation user->posts
        Auth::user()->posts()->create($this->validate());

        flash('Post created successfully', 'success');

        // reset the form
        $this->reset();
    }
}
