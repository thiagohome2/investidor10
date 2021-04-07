<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class SearchNews extends Component
{
    public $search = '';

    public function render()
    {
        return view('index', [
            'new' => News::where('title', $this->search)->get(),
        ]);
    }

}
