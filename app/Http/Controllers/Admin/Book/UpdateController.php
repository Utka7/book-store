<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\book\UpdateRequest;
use App\Models\Books;


//Сохранение обновления
class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Books $book)
    {
        $data = $request->validated();
        $book -> update($data);
        return view('admin.book.show', compact('book'));
    }
}
