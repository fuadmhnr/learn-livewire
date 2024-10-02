<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;

class PostForm extends Form
{
    #[Rule('required|min:3')]
    public string $title = '';

    #[Rule('required|min:3')]
    public string $content = '';

    public function store()
    {
        // TODO: get user id from auth
        $user = User::find(1);

        // is there is no data is validated, use this
        // $validated = $this->all();

        // create a post via relation user->posts
        $user->posts()->create($this->validate());

        // reset the form
        $this->reset();
    }
}
