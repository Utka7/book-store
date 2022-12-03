<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Categories;

class ShowController extends Controller
{
    public function __invoke(Categories $category)
    {
        return view( 'admin.category.show', compact('category'));
    }
}
