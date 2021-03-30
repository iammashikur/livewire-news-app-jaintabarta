<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Home extends Component
{
    public $body, $post_id;

    public $numResults = 20;
    protected $listeners = [
        'load-more' => 'loadMore',
        'feed-update' => 'render',
    ];

    public function render()
    {
        $posts = Post::query()->orderBy('created_at', 'desc')->paginate($this->numResults);
        $this->emit('postStore');
        return view('livewire.home', compact('posts'))->extends('layouts.app')
        ->section('content');
    }

    public function loadMore(){
        $this->numResults += 20;
    }
}
