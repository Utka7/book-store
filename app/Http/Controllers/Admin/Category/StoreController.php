<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\StoreRequest;
use App\Models\Categories;

//Сохраняет новую категорю в БД
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request -> validated();
        Categories::FirstOrcreate($data);
        return redirect() -> route('admin.category.index');
    }
}
