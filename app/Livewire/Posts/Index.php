<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\On;

#[Title('Posts')]
class Index extends Component
{
    #[On('postCreated')]
    public function updateList($post)
    {
        //
    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        sleep(5);
        $posts = Post::query()->with('user')->latest()->get();

        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
