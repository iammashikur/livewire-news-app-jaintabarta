<?php

namespace App\Http\Livewire;

use Livewire\Component;

class News extends Component
{

    public $slug;


    public function mount($slug){
        $this->slug =  $slug;
    }

    public function render()
    {
        return view('livewire.news')
        ->extends('layouts.app')
        ->section('content');
    }
}
