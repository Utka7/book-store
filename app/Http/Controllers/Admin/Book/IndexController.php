<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Authors;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $books = Books::all(); // Получение всех категорий из БД
        return view( 'admin.book.index', compact('books'));

    }
}
