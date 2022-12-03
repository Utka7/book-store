<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;

class СreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.book.create');
    }
}
