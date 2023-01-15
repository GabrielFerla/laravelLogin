<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class EditBook extends Component
{
    public Book $books ;

    protected $rules = [
        'books.name'  => 'required|string',
        'books.isbn'  => 'numeric',
        'books.value' => 'numeric',
    ];

    public function mount($book)
    {
        $this->books = Book::find($book);
    }

    public function save()
    {
        $this->validate();

        $this->books->save();

        return redirect()->to('/book');
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
