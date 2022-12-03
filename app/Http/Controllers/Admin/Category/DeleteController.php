<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\UpdateRequest;
use App\Models\Categories;

//Удаление
class DeleteController extends Controller
{
    public function __invoke(Categories $category)
    {

        $category -> delete();
        return redirect()->route('admin.category.index');
    }
}
