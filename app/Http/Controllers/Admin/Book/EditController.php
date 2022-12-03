<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Books;

//Обновление
class EditController extends Controller
{
    public function __invoke(Books $book)
    {
        return view('admin.book.edit', compact('book'));
    }
}
