<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Books;


class ShowController extends Controller
{
    public function __invoke(Books $book)
    {
        return view( 'admin.book.show', compact('book'));
    }
}
