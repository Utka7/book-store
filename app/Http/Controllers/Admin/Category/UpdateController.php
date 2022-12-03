<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\UpdateRequest;
use App\Models\Categories;

//Сохранение обновления
class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Categories $category)
    {
        $data = $request->validated();
        $category -> update($data);
        return view('admin.category.show', compact('category'));
    }
}
