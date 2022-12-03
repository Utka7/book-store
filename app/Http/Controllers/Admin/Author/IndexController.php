<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Authors;

class IndexController extends Controller
{
    public function __invoke()
    {
        $authors = Authors::all(); // Получение всех категорий из БД
        return view( 'admin.author.index', compact('authors'));
    }
}
