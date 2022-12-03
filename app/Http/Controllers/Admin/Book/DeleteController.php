<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Books;


//Удаление
class DeleteController extends Controller
{
    public function __invoke(Books $book)
    {

        $book -> delete();
        return redirect()->route('admin.book.index');
    }
}
