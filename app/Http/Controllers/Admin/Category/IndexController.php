<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Categories;

class IndexController extends Controller
{
    public function __invoke()
    {

        $categories = Categories::all(); // Получение всех категорий из БД
        return view( 'admin.category.index', compact('categories'));

    }
}
