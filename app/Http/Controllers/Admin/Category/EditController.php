<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Categories;

//Обновление категории
class EditController extends Controller
{
    public function __invoke(Categories $category)
    {
        return view('admin.category.edit', compact('category'));
    }
}