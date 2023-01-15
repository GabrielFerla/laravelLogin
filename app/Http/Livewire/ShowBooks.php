<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class ShowBooks extends Component
{
    public function render()
    {
        return view('livewire.show-books', [
            'books' => Book::all()
        ]);
        return view('livewire.show-books');
    }
}
